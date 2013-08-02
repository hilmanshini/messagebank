<?php

if (session_id() == '') {
    session_start();
}
const APPNAME = "messagebank";
$host = $_SERVER['HTTP_HOST'];
$port = $_SERVER['SERVER_PORT'];
if ($port == 80) {
    $uri = ("Location:http://" . $host . "/" . APPNAME);
} else {
    $uri = ("Location:http://" . $host . ":" . $port . "/" . APPNAME);
}
if (!isset($_SESSION['USESS'])) {
    if (isOnMemberPage()) {
        //echo "".$uri.'/'.APPNAME.'/login/login.php';
        header("".$uri.'/login/login.php');
        break;;
        
    }
} else {
    if (isOnLoginPage()) {
        //echo "".$uri.'/'.APPNAME.'/login/login.php';
     header("".$uri.'/member/index.php');  
     break;;
    } 
}

function isOnMemberPage() {
    $string = $_SERVER['SCRIPT_NAME'];
    $index = lastIndexOf($string, "/");
    $ctx = substr($_SERVER['SCRIPT_NAME'], 13, $index - 13);
    ;
    if ($ctx == 'member') {
        return true;
    } else {
        return false;
    }
}

function lastIndexOf($string, $item) {
    $index = strpos(strrev($string), strrev($item));
    if ($index) {
        $index = strlen($string) - strlen($item) - $index;
        return $index;
    }
    else
        return -1;
}

function isOnLoginPage() {
    $string = $_SERVER['SCRIPT_NAME'];
    $index = lastIndexOf($string, "/");
    $ctx = substr($_SERVER['SCRIPT_NAME'], 13, $index - 13);
    ;
    if ($ctx == 'login') {
        return true;
    } else {
        return false;
    }
}

?>
