<?php
session_start();
if  (!isset($_SESSION['LOG_NAME'])){  header( "location:../pmain/" );echo '<div style=" text-align: center ; font-size:xx-large;color: white ;  background: #FFCCFF   "> <a href="../pmain/" style="text-decoration: none ;">نرجو تسجيل الدخول</a></div> ';}  else {
echo header("location:index210.php");
}


?>