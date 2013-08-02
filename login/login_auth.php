<?php
include '../class/hook.php';
include("../dbconfig/c.php");

include("../class/LoginService.php");
GLOBAL $connection;
$connection = connectDB();
$param = getParamLogin();

$login_state = getLoginInfo($param->username,$param->password,$connection);
print_r($login_state);
if(isLoginSucces($login_state)){
    saveToSession($login_state);
   redirectToMember();
} else {
    $err = (getErrorMessage($login_state));
   header("location:login.php?msg=".  urlencode($err));
}
?>