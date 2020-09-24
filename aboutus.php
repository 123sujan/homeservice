<?php
session_start();
// if(!isset($_SESSION['uid'])){
// 	echo ("<script LANGUAGE='JavaScript'>window.location.href='index.php';</script>");
// }
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


<!--chatbot-->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

</head>
<body class="Home">

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
<li class="ttr_menu_items_parent dropdown "><a href="home.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Home</a>
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
<li class="ttr_menu_items_parent dropdown active"><a href="aboutus.php" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>About Us</a>
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






<div class="ttr_banner_slideshow">
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
</div>
<div class="clearfix visible-lg-block visible-sm-block visible-md-block visible-xs-block">
</div>
</div>
<div class="ttr_Home_html_row1 row">
<div class="post_column col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="ttr_Home_html_column10">
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div class="html_content"><p style="text-align:Center;"><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(53,181,235,1);background-color:transparent;">WHAT WE DO?</span></p></div>
<span style="font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(131,131,131,1);">We are for the customers.jdghvhsdbvhbshdbvjhbjhbsjvzhbvkhbzhvbjhbsdvjhbsjdbvhjhbsdjvhbjhbsdjvhbjhbsdjvhbdshbvhbshbvhjbsdjhbvdhsbvjhbshdbvhjbsdjvbhdsbvhbdsjbvhkjdsbvgdvbsgdbvjhbdsjhvbsdvhjhdbsvhjbsbvjhbsjhvbdshvjbsuhdbvuksbdyukvbSIVbsbvjhbDVHbsDHBVhBSVjhbds

clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&quot;clr-namespace:System;assembly=mscorlib&quot;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;gt;&amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;amp;lt;String xmlns=&
</span></p><p style="margin:2.14em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;"><span></span></p>
<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>

<!------------Sujan: SERVICE DISPLAY SECTION WITH KATHE ----------->

	
		<div class="clearfix visible-sm-block visible-md-block visible-xs-block">
		</div>
		<div class=" col-lg-3 col-md-6 col-sm-6 col-xs-12">
		<div class="ttr_Home_html_column13">
		 <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
		<div class="html_content"><p style="text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 2.14em 0em;"><span><img class="ttr_uniform" src="images/$row[image]" style="max-width:120px;max-height:120px;" /></span></span><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);\">$row[name] Services</span></p><p style="margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;"><span style="font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(131,131,131,1);">$row[kathe]</span></p><p style="margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;"><span><span><a HREF="services.php?sid=$row[sid]" target="_self" class="btn btn-md btn-primary">more detail</a></span></span></p></div>
		<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
	<div style="clear:both;"></div>
		</div>
		</div>






		<div class="clearfix visible-sm-block visible-md-block visible-xs-block">
		</div>
		<div class=" col-lg-3 col-md-6 col-sm-6 col-xs-12">
		<div class="ttr_Home_html_column13">
		 <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
		<div class="html_content"><p style="text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 2.14em 0em;"><span><img class="ttr_uniform" src="images/$row[image]" style="max-width:120px;max-height:120px;" /></span></span><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);\">$row[name] Services</span></p><p style="margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;"><span style="font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(131,131,131,1);">$row[kathe]</span></p><p style="margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;"><span><span><a HREF="services.php?sid=$row[sid]" target="_self" class="btn btn-md btn-primary">more detail</a></span></span></p></div>
		<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>

	<div style="clear:both;"></div>
		</div>
		</div>









		<div class="clearfix visible-sm-block visible-md-block visible-xs-block">
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		<div class="ttr_Home_html_column13" >
		 <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
		<div class="html_content"><p style="text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 2.14em 0em;"><span><img class="ttr_uniform" src="images/$row[image]" style="max-width:120px;max-height:120px;" /></span></span><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);\">$row[name] Services</span></p><p style="margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;"><span style="font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(131,131,131,1);">$row[kathe]</span></p><p style="margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;"><span><span><a HREF="services.php?sid=$row[sid]" target="_self" class="btn btn-md btn-primary">more detail</a></span></span></p></div>
		
		</div>
		</div>











		<div class="clearfix visible-sm-block visible-md-block visible-xs-block">
		</div>
		<div class=" col-lg-3 col-md-6 col-sm-6 col-xs-12">
		<div class="ttr_Home_html_column13">
		 <div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
		<div class="html_content"><p style="text-align:Center;"><span class="ttr_image" style="float:none;display:block;text-align:center;overflow:hidden;margin:0em 0em 2.14em 0em;"><span><img class="ttr_uniform" src="images/$row[image]" style="max-width:120px;max-height:120px;" /></span></span><span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:1.429em;color:rgba(34,34,34,1);\">$row[name] Services</span></p><p style="margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;"><span style="font-family:'Roboto','Arial';font-weight:300;font-size:1.143em;color:rgba(131,131,131,1);">$row[kathe]</span></p><p style="margin:1.43em 0em 0.36em 0em;text-align:Center;line-height:1.69014084507042;"><span><span><a HREF="services.php?sid=$row[sid]" target="_self" class="btn btn-md btn-primary">more detail</a></span></span></p></div>
		<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
	<div style="clear:both;"></div>
		</div>
		</div>

	
	



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
<!------------ FOOTER KATHE ----------->



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
