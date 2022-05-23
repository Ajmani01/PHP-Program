<!-- Cookies
set cookie (name,value, expire, path, domain, secure httpoy)
$_COOKIE="AJMANI AND DHRUV"
setcookie($_COOKIE name,$_COOKIE value,time(),path); -->
<?php
$_COOKIE_name="user";
$_COOKIE_value="google";
setcookie($_COOKIE_name,$_COOKIE_value,time()+(86400),"/");
echo"Cookie is set";
?>
<html>
    <body>
        <?php
if(isset($_COOKIE[$_COOKIE_name]))
    {
        echo"Cookie is created";
    }
    else{
        echo $_COOKIE[$_COOKIE_name];
    }
?>