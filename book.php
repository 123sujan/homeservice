<?php
	if(isset($_GET['ssid'])){
		include("config.php");
		session_start();
		$now=date('Y-m-d h-m-s');
		$uid=$_SESSION['uid'];
		$a=$_GET['ssid'];
		$sql="select count(*) from trans";
		$t=mysqli_query($db,$sql);
		$row = mysqli_fetch_array($t,MYSQLI_ASSOC);
		$sql1="select temp from subservice where ssid=$a";
		$y=$t=mysqli_query($db,$sql1);
		$row1 = mysqli_fetch_array($y,MYSQLI_ASSOC);
		if($row && $row1){
			$x=$row['count(*)']+1;
			$y=$row1['temp'];
			$iddd=$y.$x;
		$sql = "insert into trans(uid,bookedtime,ssid,customerPaid,accepted,tid,transid,completed) values('$uid','$now','$_GET[ssid]',False,False,null,'$iddd',0)";
		echo $sql;
		//echo $_GET['ssid'];
		$r=mysqli_query($db,$sql);
		if($r)echo ("<script LANGUAGE='JavaScript'>window.alert('We Recived your order. you will be shortly notified by our partners');window.location.href='index.php';</script>");
		else echo ("<script LANGUAGE='JavaScript'>window.alert('Something went wrong');</script>");
	}
}
?>
