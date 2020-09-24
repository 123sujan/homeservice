<?php
	session_start();
	if(isset($_SESSION['uid'])){
		echo ("<script LANGUAGE='JavaScript'>window.location.href='home.php';</script>");
	}
	else{
		echo ("<script LANGUAGE='JavaScript'>window.location.href='login.php';</script>");
	}
?>
