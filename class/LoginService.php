<?php

include 'LoginState.php';
GLOBAL $conn;
function getLoginInfo($username, $password, $connection) {
    $q = mysql_query("select u.username ,u.password , u.id ,u.pic from users as u where u.username = '" . $username ."'", $connection);
	$conn = $connection;
    $res = mysql_fetch_row($q);

    if (count($res) == 0) {
        $e = new LoginState();
        $e->state = 1;
        return $e;
    } else {
        $pass = $res[1];
        $e;
        if ($pass != $password) {
            $e = new LoginState();
            $e->state = 1;
        } else {
            $e = new LoginState();
            $e->state = 3;
            $e->username = $res[0];
            $e->id = $res[2];
            $e->pic = "https://messagebank.tokyo.jp/img/users/profile/".$res[3];
        }
        return $e;
    }
}

function isLoginSucces($v ){
    if($v->state == 3){
        return true;
    } else {
        return false;
    }
}
function getErrorMessage($v){
    if($v->state != 2){
        return "Password Wrong";
    } else if($v->state == 1) {
        return "Username not exists";
    } else {
        return "Unknown Error";
        
    }
    
}
function saveToSession($login_state){
    if(session_id() == ''){
    session_start();    
    }
    
    $_SESSION['USESS'] = $login_state;
}
//const APPNAME = "messagebank";
function redirectToMember(){
    $host = $_SERVER['HTTP_HOST'];
    $port = $_SERVER['SERVER_PORT'];
    if($port == 80){
    header("Location:http://".$host."/".APPNAME."/member/index.php");    
    } else {
    header("Location:http://".$host.":".$port."/".APPNAME."/member/index.php");    
    }
    
}    
class ParamLogin {
    public $username;
    public $password;
}
function getParamLogin(){
    $e = new ParamLogin();
    
    if(isset($_POST['username']) && isset($_POST['password'])){
        $e->username = $_POST['username'];
    $e->password = $_POST['password'];
    }
    
    return $e;
}
?>