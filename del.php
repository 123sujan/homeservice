<?php
include("config.php");
if(isset($_GET['id'])){
	$sql = "delete from trans where id=$_GET[id]";
	$query = mysqli_query($db,$sql);
	header("location:invoice.php");
	exit();
}
echo "dsasadsad";
header("location:home.php");
?>
