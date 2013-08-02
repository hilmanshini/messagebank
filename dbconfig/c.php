<?php

function connectDB(){
return E::getConnection();

}
class E{
	function __construct(){
	}
private static	$con;
	static function getConnection(){
	$ip = "153.122.8.29";
$port = "3306";
$dbname = "messagebank";
$user  = "root";
$pass = "dwf#2727";

$dburlstr = $ip.":".$port."";
		$con = mysql_pconnect($dburlstr,$user,$pass);;
		mysql_select_db($dbname,$con); 

       return  $con;
	}

}

?>