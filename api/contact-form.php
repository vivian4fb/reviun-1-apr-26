<?php
error_reporting(0);
$errors = [];
$response = '';
$status = 'failed';

function isValidCaptcha($captcha)
{
    try {

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret'   => '6LdWbOkjAAAAAAmZE7XiA6LJGeJowwXgTWzhzfI9',
            'response' => $captcha,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return json_decode($result)->success;
    } catch (Exception $e) {
        return false;
    }
}

if (!empty($_POST)) {
    $fullName = $_POST['fullName'];
    $companyName = $_POST['companyName'];
    $email = $_POST['email'];
    $phonecode = $_POST['phonecode'];
    $phoneno = $_POST['phoneno'];
    $productDetails = $_POST['productDetails'];
    $message = $_POST['message'];
    $captcha = $_POST['captcha'];

    if (empty($fullName)) {
        $errors[] = 'Full Name is empty';
    }

    if (empty($companyName)) {
        $errors[] = 'Company Name is empty';
    }

    if (empty($email)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }


    if (empty($phoneno)) {
        $errors[] = 'Phone number is empty';
    } else if (strlen($phoneno) != 10) {
        $errors[] = 'Phone number is invalid (Not 10 digit)';
    }

    if (empty($message)) {
        $errors[] = 'Message is empty';
    }

    // if (!isValidCaptcha($captcha)) {
    //     $errors[] = 'Human Verification Failed';
    // }


    if (empty($errors)) {
        $toEmail = 'info@reviun.co';
        $toEmail2 = 'vivian@reviun.co';
        $emailSubject = 'New Contact From Reviun Website - ' . $fullName;
        $headers = ['From' => "info@reviun.co", 'Reply-To' => "info@reviun.co", 'Content-type' => 'text/html; charset=utf-8'];

        $headers  = "From: info@reviun.co\r\n";
        $headers .= "Reply-To: info@reviun.co\r\n";
        // $headers .= "CC: info@reviun.co\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $bodyParagraphs = ["Name: {$fullName}", "Company Name: {$companyName}", "Email: {$email}", "Phone No: +{$phonecode} {$phoneno}", "Message: {$message}"];

        $body = join("<br />", $bodyParagraphs);

        $htmlbody = "<!DOCTYPE html>
        <html>
        
        <head>
        
          <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1.0'>
          <meta name='x-apple-disable-message-reformatting'>
        
            <title>Contact Us Email</title>
        
            <style type='text/css'>
              h1 {
                font-size:22px;
                line-height:24px;
                font-family:'Helvetica', Arial, sans-serif;
                font-weight:normal;
                text-decoration:none;
                color: #000000;
              }
            </style>
        
        </head>
        
          <body style='text-align: center; margin: 0; padding-top: 10px; padding-bottom: 10px; padding-left: 0; padding-right: 0; -webkit-text-size-adjust: 100%;background-color: #f2f4f6; color: #000000' align='center'>
          
          <div style='text-align: center;'>
        
        
        
        
            <table align='center' style='text-align: left; vertical-align: top; width: 100%; max-width: 400px; background-color: #ffffff;' width='600'>
                <tbody>
                <tr>
                <td style='text-align: center; width: 100%; vertical-align: top; padding-left: 30px; padding-right: 30px; padding-top: 30px; padding-bottom: 0px;' width='596'>
                <h1 style='font-size: 22px; line-height: 24px;  font-weight: 600; text-decoration: none; color: #3332CD;'>$emailSubject</h1>
                </td>
                </tr>
                  <tr>
                    <td style='width: 100%; vertical-align: top; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 40px;' width='596'>
        
                      <h1 style='font-size: 16px; line-height: 24px; font-weight: 400; text-decoration: none; color: #000000;'>$body</h1>
        
        
                    </td>
                  </tr>
                </tbody>
              </table>
              
          
          </div>
        
          </body>
        
        </html>";

        //header('Content-type: text/html');
        //echo $htmlbody;
        //die();

        if (mail($toEmail, $emailSubject, $htmlbody, $headers)) {
            mail($toEmail2, $emailSubject, $htmlbody, $headers);

            $response = "<p style='color: green;'>Thank you for contacting us, we will get back to you soon.</p>";
            $status = "success";
        } else {
            $response = "<p style='color: red;'>Oops, something went wrong. Email not sent. Please call us at +44 7428538838.</p>";
            $status = "failed";
        }
    } else {

        $allErrors = join('<br/>', $errors);
        $response = "<p style='color: red;'>{$allErrors}</p>";
        $status = "failed";
    }
}

$data = ["message" => $response, "status" => $status];

header('Content-type: application/json');
echo json_encode($data);