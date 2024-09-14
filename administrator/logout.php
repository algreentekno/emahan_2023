<?php
include "setting.php";
session_start();
session_unset();
session_destroy();
if(isset($_COOKIE['cookieloginshped']))     
{
$time = time();
    setcookie("cookielogin[namausershped]", $time - 3600*24*7);
    setcookie("cookielogin[passusershped]", $time - 3600*24*7);
    

}
  echo "<script>window.location = '$urlmain'</script>";
?>