<?php
	if(!empty($_POST['username'])){
		$name=strip_tags($_POST['username']);
		$pass=strip_tags($_POST['password']);
		$sql = (isset($_POST['b'])) ? "select * from thirdparty where uname = '$name' and passwordhash = '$pass'" : "select * from users where uname = '$_POST[username]' and passwordhash = '$_POST[password]' and role='user' limit 1";
		include("config.php");
		//echo $sql;
		$query = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
		
		
		if(!empty($row['uname']) AND !empty($row['passwordhash'])){
			session_start();
			$_SESSION["uname"] = $row['uname'];
			if(isset($_POST['b'])){
				$_SESSION["tid"] = $row['uid'];
				$_SESSION["trole"] = $row['role'];
				echo ("<script LANGUAGE='JavaScript'>window.alert('Logged in Redirecting to service page');window.location.href='editRoot.php';</script>");
			}
			else{
				$_SESSION["uid"] = $row['uid'];
				$_SESSION["role"] = $row['role'];
				echo ("<script LANGUAGE='JavaScript'>window.alert('Logged in Redirecting to service page');window.location.href='index.php';</script>");
			}
		}
		else{
			echo ("<script LANGUAGE='JavaScript'>window.alert('Username or Password is Incorrect');window.location.href='log.php';</script>");
		}
	}
?>
<html>
<style>
  .item {white-space: nowrap;display:flex;  }
</style>
<!-- Left Image Side -->
<div class="left"></div>

<!-- Right login form side -->
<div class="right">
  <div class="content">
    <h2>Login here</h2>
    <form method="post" action="log.php">
          <input type="text" name="username" placeholder="Enter Username" required autofocus>
          <input type="password" name="password" placeholder="Enter Password"  required>
          <div class="item">
		   <input type="checkbox" name='b' id="b">
			<label for="b">I'm Third party Member</label>
		</div>
          <button type="submit">Log In</button>
          <button class="btn btn--radius btn--green" type="button" onclick="window.location.href='sigup.php';">Create a New Account!</button>
    </form>
  </div>
</div>
<style>
body {
  margin:0;
  padding:0;
  overflow: hidden;
  width: 100% !important;
  box-sizing: border-box;
  font-family:'helvetica', sans-serif;
}

.left {
  position: absolute;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.3)), url('1.jpg');
  background-repeat: no-repeat;
  background-position: center center;
   background-size: cover;
}


.right {
  width: 50%;
  height: 100%;
  background: #f9f9f9;
  right: 0;
  opacity: 0.83;
  position: absolute;
}

.content {
  width: 250px;
  margin: 0 auto;
  top: 25%;
  position: absolute;
  left: 48%;
  margin-left: -125px;
}

.content h2 {
  color: #03A9F4;
  font-weight: 300;
  font-size: 40px;
}

.right input{
	display: block;
	width: 100%;
	margin: 17px auto;
	border:0;
	border-bottom:2px solid #e7e7e9;
	padding: 13px;
  font-size: 17px;
	outline:0;
}

.right button {
	background-color: #03A9F4;
	color: #fff;
	font:600 16px sans-serif;
	width: 100%;
	padding:15px;
	outline:0;
	border:0px;
	margin-top:10px;
	border-radius:3px;
	cursor: pointer;
}

.right button:hover {
  background: #0288D1;
  box-shadow: 0 4px 7px rgba(0,0,0,0.1), 0 3px 6px rgba(0,0,0,0.1);
}

.right input {
	
	background: #eee;
	padding-left: 45px;
}


.right input[name="username"] {
	//background: transparent url("http://oi59.tinypic.com/e7mr0z.jpg") no-repeat;
	background-position: 10px 50%;
	color:#151718;
	font:750 12px helvetica;
}

.right input[name="password"] {
	//background: transparent url("http://oi60.tinypic.com/os92eo.jpg") no-repeat;
	background-position: 10px 50%;
	color:#151718;
	font:750 12px helvetica;
}

</style>
