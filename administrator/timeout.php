<?php
session_start();
function timer(){
	$time=3600;
	$_SESSION['timeoutshped']=time()+$time;
}
function cek_login(){
	$timeout=$_SESSION['timeoutshped'];
	if(time()<$timeout){
		timer();
		return true;
	}else{
		unset($_SESSION['timeoutshped']);
		return false;
	}
}
?>
