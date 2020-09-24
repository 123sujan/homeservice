<?php
session_start();
if(!isset($_SESSION['uid'])){
	echo ("<script LANGUAGE='JavaScript'>window.location.href='index.php';</script>");
}

$uid=$_SESSION['uid'];
$sid=$_GET['sid'];
include("config.php");
$sql = "select * from subservice where sid=$sid";

$sql = "select * from users where uid = '$uid' limit 1";
$query = mysqli_query($db,$sql);
$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
$address=$row['address'];
$phone=$row['phone'];



if(isset($_POST['submit'])){
		
		$qname = $_POST['qname'];
		$qemail = $_POST['qemail'];
		$qsubject = $_POST['qsubject'];
		$qmessage = $_POST['qmessage'];
		$sql = "insert into query values('$uid','$qname','$qemail','$qsubject','$qmessage')";
		//echo $sql;
		$r=mysqli_query($db,$sql);
		if($r)
			echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Updated');</script>");
		else
			echo ("<script LANGUAGE='JavaScript'>window.alert('Some thing went bad');</script>");
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
<script type="text/javascript" src="bootstrap.min.js">
</script>
<script type="text/javascript" src="Customjs.js">
</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
contact
</title>
<link rel="stylesheet"  href="bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="style.css" type="text/css" media="screen"/>
<!--[if lte IE 8]>
<link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
<![endif]-->
<script type="text/javascript" src="totop.js">
</script>
<!--[if IE 7]>
<style type="text/css" media="screen">
#ttr_vmenu_items  li.ttr_vmenu_items_parent {margin-left:-16px;font-size:0px;}
</style>
<![endif]-->
<!--[if lt IE 9]>
<script type="text/javascript" src="html5shiv.js">
</script>
<script type="text/javascript" src="respond.min.js">
</script>
<![endif]-->
</head>
<body class="Contact">
<div class="totopshow">
<a href="#" class="back-to-top"><img alt="Back to Top" src="images/gototop0.png"/></a>
</div>
<div id="ttr_page" class="container">
<header id="ttr_header">
<div id="ttr_header_inner">
<div class="ttr_headershape01">
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
<li class="ttr_menu_items_parent dropdown "><a href="home.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Home</a>
<hr class ="horiz_separator"/>

<li class="ttr_menu_items_parent dropdown"><a href="services.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Services</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown active"><a href="contact.php" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>Contact</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="orders.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>About orders</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="logout.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Logout [<?php echo $_SESSION['uname']; ?>]</a>
<hr class ="horiz_separator"/>
</li>
</ul>
</div>
</div>
</div>
</nav>
<div id="ttr_content_and_sidebar_container">
<div id="ttr_content">
<div id="ttr_content_margin"class="container-fluid">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="ttr_Contact_html_row0 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Contact_html_column00">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(53,181,235,1);">CONTACT US</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
<div class="post_column col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_Contact_html_column01">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.714em;color:rgba(34,34,34,1);">Queris Form</span></p><p style="margin:1.43em 0em 0.36em 0em;"><form id="ContactForm0" class="form-horizontal" role="form" method="post" action="contact.php" style="padding:0px 0px 0px 0px;float:left;">
	<div class="form-group"><label class="col-sm-4 control-label">Name</label><div class="col-sm-8">
		<input type="text" name="qname" class="form-control" data-vali="novalidation" /></div></div><div class="form-group"><label class="col-sm-4 control-label required">Email</label><div class="col-sm-8">
			<input type="text" name="qemail" class="form-control required" data-vali="email" /></div></div><div class="form-group"><label class="col-sm-4 control-label">Subject</label><div class="col-sm-8">
				<input type="text" name="qsubject" class="form-control" data-vali="novalidation" /></div></div><div class="form-group"><label class="col-sm-4 control-label">Message</label><div class="col-sm-8">
					<textarea class="form-control comment" name="qmessage" rows="4" ></textarea></div></div><div class="form-group"><div class="col-sm-4 col-sm-offset-8"> 
						<input  type="submit" name="submit" class="form-control" >
</div></div><div class="clearfix"></div><div class="success"></div><div class="req_field"></div><div class="clearfix"></div></form></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-xs-block">
</div>
<div class="post_column col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="ttr_Contact_html_column02">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.714em;color:rgba(34,34,34,1);">Contact Info</span></p><p style="margin:1.43em 0em 0.36em 0em;line-height:1.54929577464789;"><span style="font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(34,34,34,1);"></span></p><p style="margin:1.43em 0em 0em 0em;line-height:1.54929577464789;"><span style="font-family:'Roboto','Arial';font-weight:500;font-size:1.143em;color:rgba(34,34,34,1);">GECH</span></p><p style="margin:0em 0em 0em 0em;line-height:1.54929577464789;"><span style="font-family:'Roboto','Arial';font-weight:500;font-size:1.143em;color:rgba(34,34,34,1);">Hassan,India</span></p><p style="margin:1.43em 0em 0.36em 0em;line-height:1.54929577464789;"><span style="font-family:'Roboto','Arial';font-weight:500;font-size:1.143em;color:rgba(34,34,34,1);">Phone No : 1234</span></p><p style="margin:0em 0em 0.36em 0em;line-height:1.54929577464789;"><span style="font-family:'Roboto','Arial';font-weight:500;font-size:1.143em;color:rgba(34,34,34,1);"></span></p><p style="margin:0em 0em 0.36em 0em;line-height:1.54929577464789;"><span style="font-family:'Roboto','Arial';font-weight:500;font-size:1.143em;color:rgba(34,34,34,1);">Email : gech@gmail.com</span></p><p style="margin:0em 0em 0.36em 0em;line-height:1.54929577464789;"><br style="font-family:'Roboto','Arial';font-weight:500;font-size:1.143em;color:rgba(34,34,34,1);" /></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
</div>
</div>
<div style="clear:both">
</div>
</div>
<div style="height:0px;width:0px;overflow:hidden;"></div>

<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-bottom-collapse: separate;"></div>
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
</body>
</html>
