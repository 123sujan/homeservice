<?php
include("../config.php");
if(isset($_POST['modify'])){
	if(isset($_POST['uid'])){
	$sql = "update users set email='$_POST[email]',role='$_POST[role]',uname='$_POST[uname]',joined='$_POST[joined]',dob='$_POST[dob]',address='$_POST[address]' where uid='$_POST[uid]'";
	$query = mysqli_query($db,$sql);
	echo $sql;
header("location:u.php");
	exit();
	}
	else{
	$avail=($_POST['avail']=="yes"?1:0);
	$sql = "update subservice set available=$avail,name='$_POST[ss_name]',cost='$_POST[cost]',kathe='$_POST[kathe]' where ssid=$_POST[ssid]";
	$query = mysqli_query($db,$sql);
	echo $sql;
	header("location:home.php");
	}
	
header("location:home.php");
}


if(isset($_POST['modifys'])){
	if(isset($_POST['uid'])){
	$sql = "update thirdparty set email='$_POST[email]',uname='$_POST[uname]',joined='$_POST[joined]',dob='$_POST[dob]',address='$_POST[address]',number='$_POST[number]' where uid='$_POST[uid]'";
	$query = mysqli_query($db,$sql);
	echo $sql;
header("location:u.php");
	exit();
	}
}



if(isset($_POST['action'])){
	if(isset($_POST['uid'])){
	
	$sql = "insert into subservice values ('$_POST[service]',$_POST[subservice]','$_POST[kathe]','$_POST[aprice]','$ssid','$_POST[avail]')";
	$query = mysqli_query($db,$sql);
	echo $sql;
	if($query){
		header("location:home.php");
	}

	exit();
	}
}

?>
