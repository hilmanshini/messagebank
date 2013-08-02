<?php

session_start();
if(isset($_SESSION['USESS'] )){
    session_destroy();
}
include "../class/hook.php";
header("Location:login.php");
?>