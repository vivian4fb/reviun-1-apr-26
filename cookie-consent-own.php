<div class="cookies-eu-banner hidden">

    <div id="customizeCookie hidden">

    </div>


    We use cookies to enhance your browsing experience, serve personalized ads or content, and analyze our traffic. By
    clicking "Accept All", you consent to our use of cookies. Cookie Policy

    <br>
    <button>Customize</button>
    <button>Reject All</button>
    <button>Accept All</button>
</div>

<script type="text/javascript" charset="UTF-8">
const getCookie = (name) => {
    const value = " " + document.cookie;
    console.log("value", `==${value}==`);
    const parts = value.split(" " + name + "=");
    return parts.length < 2 ? undefined : parts.pop().split(";").shift();
};

const setCookie = function(name, value, expiryDays, domain, path, secure) {
    const exdate = new Date();
    exdate.setHours(
        exdate.getHours() +
        (typeof expiryDays !== "number" ? 365 : expiryDays) * 24
    );
    document.cookie =
        name +
        "=" +
        value +
        ";expires=" +
        exdate.toUTCString() +
        ";path=" +
        (path || "/") +
        (domain ? ";domain=" + domain : "") +
        (secure ? ";secure" : "");
};


document.addEventListener('DOMContentLoaded', function() {
    const $cookiesBanner = document.querySelector(".cookies-eu-banner");
    const $cookiesBannerButton = $cookiesBanner.querySelector("button");
    const cookieName = "cookiesBanner";
    const hasCookie = getCookie(cookieName);

    if (!hasCookie) {
        $cookiesBanner.classList.remove("hidden");
    }

    $cookiesBannerButton.addEventListener("click", () => {
        setCookie(cookieName, "closed");
        $cookiesBanner.remove();
    });
});
</script>

<style>
.cookies-eu-banner {
    background: #444;
    color: #fff;
    padding: 6px;
    font-size: 13px;
    text-align: center;
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index: 10;
}

.cookies-eu-banner button {
    text-decoration: none;
    background: #222;
    color: #fff;
    border: 1px solid #000;
    cursor: pointer;
    padding: 4px 7px;
    margin: 2px 0;
    font-size: 13px;
    font-weight: 700;
    transition: background 0.07s, color 0.07s, border-color 0.07s;
}

.cookies-eu-banner button:hover {
    background: #fff;
    color: #222;
}

.hidden {
    display: none;
}
</style>

<!-- Google Analytics -->
<script type="text/plain" data-cookie-consent="targeting">

</script>
<!-- end of Google Analytics-->