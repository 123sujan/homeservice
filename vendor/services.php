<?php
session_start();
if(!isset($_SESSION['uid'])){
	echo ("<script LANGUAGE='JavaScript'>window.location.href='index.php';</script>");
}
if(!isset($_GET["sid"]))echo ("<script LANGUAGE='JavaScript'>window.location.href='index.php';</script>");
$uid=$_SESSION['uid'];
$sid=$_GET['sid'];
include("config.php");

$sql = "select * from users where uid = '$uid' limit 1";
$query = mysqli_query($db,$sql);
$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
$address=$row['address'];
$phone=$row['phone'];
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
<script type="text/javascript" src="contactform.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
New Page
</title>
<link rel="stylesheet"  href="bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="style.css" type="text/css" media="screen"/>
<script type="text/javascript" src="totop.js">
</script>
</head>
<body class="Services">
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
<li class="ttr_menu_items_parent dropdown"><a href="home.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Home</a>
<hr class ="horiz_separator"/>
</li>

<li class="ttr_menu_items_parent dropdown active"><a href="services.php" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>Services</a>
<hr class ="horiz_separator"/>
</li>
</li>
<li class="ttr_menu_items_parent dropdown"><a href="contact.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Contact</a>
<hr class ="horiz_separator"/>
</li>
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
<div class="ttr_Services_html_row0 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Services_html_column00">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(53,181,235,1);">WHAT WE DO</span></p></div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<?php
$x=1;
$sql = "select * from subservice where sid=$sid and available=1";
$query = mysqli_query($db,$sql);

while($row = $query->fetch_assoc()) {
	if($x%2==1){
		echo "<div class=\"clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block\">";
		echo "</div>";
		echo "<div class=\"post_column col-lg-6 col-md-6 col-sm-6 col-xs-12\">";
		echo "<div class=\"ttr_Services_html_column0$x\">";
		echo "<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>";
		echo "<div class=\"html_content\"><p><span class=\"ttr_image\" style=\"float:Left;overflow:hidden;margin:0em 1.43em 0em 0em;\"><span><img class=\"ttr_uniform\" src=\"images/87.png\" style=\"max-width:119px;max-height:119px;\" /></span></span><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);\">$row[name]</span></p><p style=\"margin:0.71em 0em 0.36em 0em;line-height:1.54929577464789;\"><span style=\"font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(105,105,105,1);\">$row[kathe]</span></p><p style=\"margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;\"><span><span><a HREF=\"book.php?ssid=$row[ssid]\" target=\"_self\" class=\"btn btn-md btn-primary\">Book for $row[cost]</a></span></span></p></div>";
	}
	else{
		echo "<div class=\"clearfix visible-xs-block\">";
		echo "</div>";
		echo "<div class=\"post_column col-lg-6 col-md-6 col-sm-6 col-xs-12\">";
		echo "<div class=\"ttr_Services_html_column0$x\">";
		echo "<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>";
		echo "<div class=\"html_content\"><p><span class=\"ttr_image\" style=\"float:Left;overflow:hidden;margin:0em 1.43em 0em 0em;\"><span><img class=\"ttr_uniform\" src=\"images/88.png\" style=\"max-width:120px;max-height:120px;\" /></span></span><span style=\"font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);\">$row[name]</span></p><p style=\"margin:0.71em 0em 0.36em 0em;line-height:1.54929577464789;\"><span style=\"font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(105,105,105,1);\">$row[kathe]</span></p><p style=\"margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;\"><span><span><a HREF=\"book.php?ssid=$row[ssid]\" target=\"_self\" class=\"btn btn-md btn-primary\">Book for $row[cost]</a></span></span></p></div>";
	}
	echo "<div style=\"height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;\"></div>";
	echo "<div style=\"clear:both;\"></div>";
	echo "</div>";
	echo "</div>";
	$x=$x+1;
}
?>


</div>
</div>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
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
