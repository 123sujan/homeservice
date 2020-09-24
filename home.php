<?php
session_start();
if(!isset($_SESSION['uid'])){
	echo ("<script LANGUAGE='JavaScript'>window.location.href='index.php';</script>");
}
$uid=$_SESSION['uid'];
include("config.php");
$sql = "select * from users where uid = '$uid' limit 1";
$query = mysqli_query($db,$sql);
$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
$address=$row['address'];
$phone=$row['phone'];

$sql1 = "select count(*) from thirdparty";
$query1 = mysqli_query($db,$sql1);
$row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC);
$provider=$row1['count(*)'];
// user
$sql2 = "select count(*) from users where role='user'";
$query2 = mysqli_query($db,$sql2);
$row2 = mysqli_fetch_array($query2,MYSQLI_ASSOC);
$user=$row2['count(*)'];

//finished work
$sql3 = "select count(*) from trans where completed=1 and accepted=1";
$query3 = mysqli_query($db,$sql3);
$row3 = mysqli_fetch_array($query3,MYSQLI_ASSOC);
$finished=$row3['count(*)'];
//on going work 
$sql4 = "select count(*) from trans where completed=0 and accepted=1";
$query4 = mysqli_query($db,$sql4);
$row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC);
$going=$row4['count(*)'];


if(isset($_POST['update'])){


	$uid=$_SESSION['uid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['number'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];

$timestamp = strtotime($dob);
 
// Creating new date format from that timestamp
$dob = date("Y-m-d", $timestamp);
//echo $dob;
$sql10 = "update users set uname='$name',email='$email',phone=$phone,address='$address',dob='$dob' where uid='$uid'";
//echo $sql10;

$query10 = mysqli_query($db,$sql10);

if($query10){
	$message="updated";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
}


if(isset($_POST['change']))
{
$uid=$_SESSION['uid'];
$cpassword=$_POST['currentpassword'];
$newpassword=$_POST['newpassword'];
$query=mysqli_query($db,"select uid from users where uid='$uid' and passwordhash='$cpassword'");
$row=mysqli_fetch_array($query);
if($row>0){
$ret=mysqli_query($db,"update users set passwordhash='$newpassword' where uid='$uid'");	
$msg= "Your password successully changed"; 
} else {

$msg="Your current password is wrong";
}

echo "<script type='text/javascript'>alert('$msg');</script>";

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="jquery.js">
</script>
<script type="text/javascript" src="jquery-ui.min.js">
</script>
<script type="text/javascript" src="tt_slideshow.js">
</script>
<script type="text/javascript" src="bootstrap.min.js">
</script>
<script type="text/javascript" src="Customjs.js">
</script>
<script type="text/javascript" src="contactform.js">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
Services Offered 
</title>
<link rel="stylesheet"  href="bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="style.css" type="text/css" media="screen"/>
<script type="text/javascript" src="totop.js">
</script>

<link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<!--chatbot-->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
 

 <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword();
return false;
}
return true;
}	

</script>

</head>
<!-- profile -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Profile Update</h4>
        </div>
        <div class="modal-body">
          
          <form method="POST" >
          <input type="text" name="name" value="<?php echo $row['uname']; ?>" placeholder="Name">
          <input type="text" name="email" value="<?php echo $row['email']; ?>" placeholder="email">
          <input type="text" name="number" value="<?php echo $row['phone']; ?>" placeholder="Number">
          <input type="text" name="address" value="<?php echo $row['address']; ?>" placeholder="address">
          <input type="date" name="dob" value="<?php echo $row['dob']; ?>" placeholder="address"></br></br>
          <input type="submit" name="update" placeholder="Update" style="position: absolute;right: 50%;">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- change password -->

  <div class="modal fade" id="Modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password </h4>
        </div>
        <div class="modal-body">
          
          <form method="POST" onsubmit="return checkpass();" >
          <input type="password" id="Password" name="currentpassword"  value="" placeholder="Current password">
          <input type="password" id="newpassword" name="newpassword" value="" placeholder="New Password">
          <input type="password" id="confirmpassword" name="confirmpassword" value="" placeholder="Confirm Password"></br>
          <input type="submit" name="change" placeholder="Update" style="position: absolute;right: 50%;">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<body class="Home">
<div class="totopshow">
<a href="#" class="back-to-top"><img alt="Back to Top" src="images/gototop0.png"/></a>
<div style="height:0px;width:0px;overflow:hidden;"></div>



</div>
<div id="ttr_page" class="container">
<header id="ttr_header">
<div id="ttr_header_inner">
<div class="ttr_headershape01" style="left:40%;width:500px;">
<div class="html_content"><p style="margin:0em 0em 0em 0em;line-height: normal;"><br style="font-size:0.571em;" /></p><p style="margin:0em 0em 0em 0em;text-align:Center;line-height: normal;"><span style="font-family:'Roboto','Arial';font-weight:300;color:rgba(153,153,153,1);"><?php echo $address;?>&nbsp;&nbsp;</span></p></div>
</div>
<div class="ttr_headershape02">
<div class="html_content"><p style="margin:0em 0em 0em 0em;text-align:Center;line-height: normal;"><br style="font-size:0.571em;" /></p><p style="margin:0em 0em 0em 0em;text-align:Center;line-height: normal;"><span style="font-family:'Roboto','Arial';font-weight:300;color:rgba(153,153,153,1);">Phone:<?php echo $phone;?></span></p></div>

</div>
</div>
</header>
<nav id="ttr_menu" class="navbar-default navbar">
   <div id="ttr_menu_inner_in">
<div class="menuforeground">
</div>
<div class="ttr_menushape1">
<div class="html_content"><p><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(53,181,235,1);">One Click</span></p></div>
</div>
<div id="navigationmenu">
<div class="navbar-header">
<button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
<span class="sr-only">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
<span class="icon-bar">
</span>
</button>
<a href="#" target="_self">
<img  class="ttr_menu_logo" src="menulogo.png" >
</a>
</div>
<div class="menu-center collapse navbar-collapse">
<ul class="ttr_menu_items nav navbar-nav navbar-right">
<li class="ttr_menu_items_parent dropdown active"><a href="home.php" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>Home</a>
<hr class ="horiz_separator"/>

<li class="ttr_menu_items_parent dropdown"><a href=# class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Services</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="contact.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Contact</a>
<hr class ="horiz_separator"/>
</li>

<li class="ttr_menu_items_parent dropdown"><a href="invoice.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Cart & Invoice</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="orders.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>About orders</a>
<hr class ="horiz_separator"/>
</li>

<!-- <li class="ttr_menu_items_parent dropdown"><a href="logout.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Logout [<?php 
//echo $_SESSION['uname']; ?>]</a>
 --><hr class ="horiz_separator"/>
</li>
<li>
	 <div class="dropdown" style="text-align: center;">
    <a class="btn btn-primary dropdown-toggle " type="button" data-toggle="dropdown" style="background-color: white;color: black;align-content: center;border-radius: 50%;float: center;">
    	<?php echo $_SESSION['uname']; ?>
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><button type="button"  data-toggle="modal" data-target="#myModal" style="border: transparent;background-color: white;">profile</button></li>
      <li> <button type="button"  data-toggle="modal" data-target="#Modal" style="border: transparent;background-color: white;text-align: center;">Change password</button></li>
      <li><button type="button"  onclick="window.location.href='logout.php'" style="border: transparent;background-color: white;">logout</button></li>
     
    
    </ul>
  </div>
</li>
</ul>
</div>
</div>
</div>
</nav>





<div class="ttr_banner_slideshow">
</div>
<div class="ttr_slideshow">
<div id="ttr_slideshow_inner">
<ul>
<li id="Slide0" class="ttr_slide" data-slideEffect="Wipe">
<a href="#"></a>
<div class="ttr_slideshow_last">
<div class="ttr_slideshowshape01" data-effect="None" data-begintime="0" data-duration="1" data-easing="linear" data-slide="bottom">
<div class="html_content"><p style="margin:0em 0em 0em 0em;text-align:Center;font-family:'<String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;>&amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;gt;&amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;gt;&amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;gt;&amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;Arial&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/String&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/String&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/String&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/String&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/String&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/String&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;/String&amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;lt;/String&amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;lt;/String&amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;lt;/String&amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;lt;/String&amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;lt;/String&amp;amp;amp;amp;gt;&amp;amp;amp;lt;/String&amp;amp;amp;gt;&amp;amp;lt;/String&amp;amp;gt;&amp;lt;/String&amp;gt;</String>';font-size:1.333em;"><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:3.929em;color:rgba(255,255,255,1);">Our moto is to serve society</span></p></div>
</div>
</div>
</li>
<li id="Slide1" class="ttr_slide" data-slideEffect="Wipe">
<a href="#"></a>
<div class="ttr_slideshow_last">
<div class="ttr_slideshowshape11" data-effect="None" data-begintime="0" data-duration="1" data-easing="linear" data-slide="bottom">
<div class="html_content"><p style="text-align:Center;"><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:3.929em;color:rgba(255,255,255,1);">First come first serve</span></p></div>
</div>
</div>
</li>

</ul>
</div>
<div class="ttr_slideshow_in">
<div class="ttr_slideshow_last">
<div id="nav"></div>
</div>
</div>
</div>
<div class="ttr_banner_slideshow">
</div>
<div id="ttr_content_and_sidebar_container">
<div id="ttr_content">
<div id="ttr_content_margin"class="container-fluid">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="ttr_Home_html_row0 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Home_html_column00">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(53,181,235,1);">We Serve It</span></p><p style="margin:2.14em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;"><span style="font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(131,131,131,1);">We are for the customers.</span></p><p style="margin:2.14em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;"><span></span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_Home_html_row1 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Home_html_column10">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(53,181,235,1);background-color:transparent;">WHAT WE DO?</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>

<!------------Sujan: SERVICE DISPLAY SECTION WITH KATHE ----------->
<?php
$sql=" select * from service;";
$query = mysqli_query($db,$sql);

while($row = $query->fetch_assoc()) {
	if($row['sid']%3==2){
		echo "<div class=\"clearfix visible-sm-block visible-md-block visible-xs-block\">";
		echo "</div>";
		echo "<div class=\"post_column col-lg-4 col-md-6 col-sm-6 col-xs-12\">";
		echo "<div class=\"ttr_Home_html_column13\">";
		echo "<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>";
		echo "<div class=\"html_content\"><p style=\"text-align:Center;\"><span class=\"ttr_image\" style=\"float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 2.14em 0em;\"><span><img class=\"ttr_uniform\" src=\"images/$row[image]\" style=\"max-width:120px;max-height:120px;\" /></span></span><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);\">$row[name] Services</span></p><p style=\"margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;\"><span style=\"font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(131,131,131,1);\">$row[kathe]</span></p><p style=\"margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;\"><span><span><a HREF=\"services.php?sid=$row[sid]\" target=\"_self\" class=\"btn btn-md btn-primary\">more detail</a></span></span></p></div>";
		echo "<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>";
		echo "<div style=\"clear:both;\"></div>";
		echo "</div>";
		echo "</div>";
	}
	else if($row['sid']%3==1){
		echo "<div class=\"clearfix visible-xs-block\">";
		echo "</div>";
		echo "<div class=\"post_column col-lg-4 col-md-6 col-sm-6 col-xs-12\">";
		echo "<div class=\"ttr_Home_html_column12\">";
		echo "<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>";
		echo "<div class=\"html_content\"><p style=\"text-align:Center;\"><span class=\"ttr_image\" style=\"float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 2.14em 0em;\"><span><img class=\"ttr_uniform\" src=\"images/$row[image]\" style=\"max-width:120px;max-height:120px;\" /></span></span><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);\">$row[name]</span><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);\"> </span><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);\">Services</span></p><p style=\"margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;\"><span style=\"font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(131,131,131,1);\">$row[kathe]</span></p><p style=\"margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;\"><span><span><a HREF=\"services.php?sid=$row[sid]\" target=\"_self\" class=\"btn btn-md btn-primary\">more detail</a></span></span></p></div>";
		echo "<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>";
		echo "<div style=\"clear:both;\"></div>";
		echo "</div>";
		echo "</div>";
	}
	else{
		echo "<div class=\"clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block\">";
		echo "</div>";
		echo "<div class=\"post_column col-lg-4 col-md-6 col-sm-6 col-xs-12\">";
		echo "<div class=\"ttr_Home_html_column11\">";
		echo "<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>";
		echo "<div class=\"html_content\"><p style=\"text-align:Center;\"><span class=\"ttr_image\" style=\"float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 2.14em 0em;\"><span><img class=\"ttr_uniform\" src=\"images/$row[image]\" style=\"max-width:119px;max-height:119px;\" /></span></span><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);\">$row[name] </span><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);\">Services </span></p><p style=\"margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;\"><span style=\"font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(131,131,131,1);\">$row[kathe]</span></p><p style=\"margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;\"><span><span><a HREF=\"services.php?sid=$row[sid]\" target=\"_self\" class=\"btn btn-md btn-primary\">more detail</a></span></span></p></div>";
		echo "<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>";
		echo "<div style=\"clear:both;\"></div>";
		echo "</div>";
		echo "</div>";
	}
}
?>


<!------------Sujan: SOME STATS ABOUT USERS ----------->
<div class="clearfix visible-lg-block visible-xs-block">
</div>
</div>
<div class="ttr_Home_html_row2 row">
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_Home_html_column20">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<?php 
echo "<div class=\"html_content\"><p style=\"text-align:Center;\">
<span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(255,255,255,1);\">".$provider."</span></p><p style=\"text-align:Center;\"><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(255,255,255,1);\">SERVICE PROVIDERS</span></p><p style=\"margin:1.43em 0em 0.36em 0em;text-align:Center;\"><span style=\"font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(255,255,255,1);\">Experts with an high experience</span></p></div>
<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>
<div style=\"clear:both;\"></div>";
 ?>
</div>
</div>
<div class="clearfix visible-xs-block">
</div>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_Home_html_column21">
<?php echo "<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>
<div class=\"html_content\"><p style=\"margin:0.36em 0em 0.36em 0em;text-align:Center;\"><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(255,255,255,1);\">".$user."</span></p><p style=\"margin:0.36em 0em 0.36em 0em;text-align:Center;\"><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(255,255,255,1);\">OUR CLIENTS</span></p><p style=\"margin:1.43em 0em 0.36em 0em;text-align:Center;\"><span style=\"font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(255,255,255,1);\">Trusted people.</span></p></div>
<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>
<div style=\"clear:both;\"></div>";
?>
</div>
</div>
<div class="clearfix visible-sm-block visible-md-block visible-xs-block">
</div>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_Home_html_column22">
<?php echo "<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>
<div class=\"html_content\"><p style=\"margin:0.36em 0em 0.36em 0em;text-align:Center;\"> <span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(255,255,255,1);\">".$finished."</span></p><p style=\"margin:0.36em 0em 0.36em 0em;text-align:Center;\"><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(255,255,255,1);\">FINISHED WORK</span></p><p style=\"margin:1.43em 0em 0.36em 0em;text-align:Center;\"><span style=\"font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(255,255,255,1);\">Successful completion. </span></p></div>
<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>
<div style=\"clear:both;\"></div>"
?>
</div>
</div>
<div class="clearfix visible-xs-block">
</div>
<div class="post_column col-lg-3 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_Home_html_column23">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<?php echo "<div class=\"html_content\"><p style=\"margin:0.36em 0em 0.36em 0em;text-align:Center;\"><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(255,255,255,1);\">".$going."</span></p><p style=\"margin:0.36em 0em 0.36em 0em;text-align:Center;\"><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(255,255,255,1);\">ON PROCESS</span></p><p style=\"margin:1.43em 0em 0.36em 0em;text-align:Center;\"><span style=\"font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(255,255,255,1);\"> At to complete. </span></p></div>
<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>
<div style=\"clear:both;\"></div>";
 ?>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>

		<script src="js/index.js"></script>

<!--kjsdbvjk-->


<!--vkfjnkj-->
<!------------AWCATOR: FOOTER KATHE ----------->

<!-- <img src="images/a.jpg" class="open-button" id="open_chat_btn" onclick="openForm()" style="visibility: hidden;position: absolute;right: 100px; width: 150px;height: 100px;"/>
 -->
<!-- <div class="chat-popup" id="myForm"> -->
  <!-- <div class="bottomright"> -->
    <!--     <div class="circle" > -->
            <!-- <iframe src="chat.html" width="350px" height="600px" frameborder="0"  style="position: relative;right: -1200px;overflow: hidden;"  onload=" closeForm()"></iframe> -->
        <!-- </div> -->
        <!-- <button type="button" class="close-button" id="close_chat_btn" onclick="closeForm()">Close</button> -->
       <!--  <img src="images/close.jpg" class="close-button" id="close_chat_btn" onclick="closeForm()"style="position: absolute;right: 100px;width: 100px;height: 80px;"/> -->
    <!-- </div> -->
<!-- </div> -->




<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-bottom-collapse: separate;"></div>
</div>
<img src="images/a.jpg" class="open-button" id="open_chat_btn" onclick="openForm()" style="visibility: hidden;position: absolute;right: 90px; width: 150px;height: 100px;top: 3000px;"/>

<div class="chat-popup" id="myForm" >
  <!-- <div class="bottomright"> -->
        
            <iframe src="chat.html" width="350px" height="600px" frameborder="0"  style="position: absolute;right: 0%;clear: both;top: 2400px;bottom: -500px; overflow-y: scroll;border-radius:15px;"  ></iframe>
        
        <!-- <button type="button" class="close-button" id="close_chat_btn" onclick="closeForm()">Close</button> -->
        <img src="images/close.jpg" class="close-button" id="close_chat_btn" onclick="closeForm()"style="position: absolute;right: 90px; width: 100px;height: 80px;top: 3000px;"/>
    <!-- </div> -->
</div>

<script type="text/javascript">
WebFontConfig = {
google: { families: [ 'Roboto+Slab:700','Roboto+Slab'] }
};
(function() {
	var wf = document.createElement('script');
	wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.0.31/webfont.js';
	wf.type = 'text/javascript';
	wf.async = 'true';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(wf, s);
})();
</script>

<!--chat-->
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
  document.getElementById("close_chat_btn").style.visibility = 'visible';
  document.getElementById("open_chat_btn").style.visibility = 'hidden';
}

function closeForm() {
	window.frames[0].stop(); 	
  document.getElementById("myForm").style.display = "none";
  document.getElementById("close_chat_btn").style.visibility = 'hidden';
  document.getElementById("open_chat_btn").style.visibility = 'visible';
}
</script>



</body>
</html>
