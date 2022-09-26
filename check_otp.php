<?php
session_start();
$email1=$_REQUEST['email'];
$otp1=$_REQUEST['Login'];

if($_SESSION["email"]==$email1){
	if ($_SESSION["otp"]==$otp1){
		echo "yes";
	}else{
		echo "not_exist";
	}	
}else{
	echo "not_exist";
}
// write_LOG();
//exit;

function write_LOG(){
	include("DB_conn.php");
	$email1=$_REQUEST['email'];
	$otp1=$_REQUEST['otp'];
	$user = "user";
	$date = date("Ymd");
	$time = date("H:i:s");
 	$sql="Insert Into Rc_Accesshistory(login_ID,AU_type,AU_day,AU_time)
        values ('".$email1."','".$user."',".$date.",'".$time."')
        ";
	//echo $sql;
	$cmd = oci_parse($Hrms_Conn,$sql);
	oci_execute($cmd);
}
?>