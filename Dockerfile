FROM php:7.4-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli
# mod_php requires the prefork MPM; ensure no other MPM stays enabled
RUN a2dismod mpm_event mpm_worker 2>/dev/null; a2enmod mpm_prefork
ADD . /var/www/html
COPY ./reviun_co.conf /etc/apache2/sites-available/reviun_co.conf
#RUN echo 'SetEnv MYSQL_DB_CONNECTION ${MYSQL_DB_CONNECTION}' >> /etc/apache2/conf-enabled/environment.conf
#RUN echo 'SetEnv MYSQL_DB_NAME ${MYSQL_DB_NAME}' >> /etc/apache2/conf-enabled/environment.conf
#RUN echo 'SetEnv MYSQL_USER ${MYSQL_USER}' >> /etc/apache2/conf-enabled/environment.conf
#RUN echo 'SetEnv MYSQL_PASSWORD ${MYSQL_PASSWORD}' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv SITE_URL ${SITE_URL}' >> /etc/apache2/conf-enabled/environment.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf &&\
    a2enmod rewrite &&\
    a2enmod headers &&\
    a2enmod rewrite &&\
    a2dissite 000-default &&\
    a2ensite reviun_co &&\
    service apache2 restart
EXPOSE 80

# Render (and other PaaS) inject a dynamic $PORT — bind Apache to it at startup.
# Falls back to 80 locally / under docker-compose.
CMD ["sh", "-c", "sed -i \"s/^Listen 80$/Listen ${PORT:-80}/\" /etc/apache2/ports.conf && sed -i \"s/:80>/:${PORT:-80}>/\" /etc/apache2/sites-available/reviun_co.conf && exec apache2-foreground"]