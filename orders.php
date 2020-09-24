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
Orders
</title>
<link rel="stylesheet"  href="bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="style.css" type="text/css" media="screen"/>

<!--[if lte IE 8]>
<link rel="stylesheet"  href="menuie.css" type="text/css" media="screen"/>
<link rel="stylesheet"  href="vmenuie.css" type="text/css" media="screen"/>
<![endif]-->


 <link href="admin/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="admin/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
 

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="admin/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

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
<li class="ttr_menu_items_parent dropdown "><a href="contact.php" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Contact</a>
<hr class ="horiz_separator"/>
</li>
<li class="ttr_menu_items_parent dropdown active"><a href="orders.php" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>About Orders</a>
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

<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>


<div style="height:0px;width:0px;overflow:hidden;-webkit-margin-top-collapse: separate;"></div>
<div style="clear:both;"></div>
</div>
</div>
<div class="clearfix visible-xs-block">
</div>






<div class="container" style="width: 85%; height:100%;">
          <p class="caption">List of Services ordered</p>
          <div class="divider"></div>
          <!--editableTable-->
<div id="work-collections" class="seaction">
             
					<?php

					$sql = mysqli_query($db, "SELECT * FROM trans where uid='$_SESSION[uid]' order by bookedtime DESC;");
					echo '<div class="row">
                <div>
                    <h4 class="header">List</h4>
                    <ul id="issues-collection" class="collection">';
					while($row = mysqli_fetch_array($sql))
					{
						$deleted=0;
						$status = $row['accepted'];
            			$status1 = $row['completed'];
            			//echo $status;
						echo '<li class="collection-item avatar">
                              <i class="mdi-content-content-paste blue circle"></i>
                              <span class="collection-header">Order No. '.$row['id'].'</span></br>
                              <span class="collection-header">Request No. '.$row['transid'].'</span>
                              <p><strong>Date:</strong> '.$row['bookedtime'].'</p>
                              <p><strong>Payment Type:</strong> Digital Payment</p>							  
							  <p><strong>Status:</strong> '.($deleted ? $status : '
							  <form method="post" action="routers/edit-orders.php">
							    <input type="hidden" value="'.$row['id'].'" name="id">
								<select name="status" style="width:10px;">
								<option value="1" >Accepted</option>
								<option value="0"  '.($status==0?'selected':'').'>Yet to be Accepteds</option>								
								</select>
               					 <select name="status">
                			   	 <option value="1" >Completed</option>
                				 <option value="0"  '.($status1==0?'selected':'').'>Yet to be Completed</option>                
                                </select>
							  ').'</p>
                              <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                              </li>';
						$order_id = $row['id'];
						$customer_id = $row['uid'];
						 $third_id = $row['tid'];
						$sql1 = mysqli_query($db, "SELECT * FROM trans where id = $order_id;");
						$sql3 = mysqli_query($db, "SELECT * FROM users WHERE uid = '$customer_id';");
						 $sql4 = mysqli_query($db, "SELECT * FROM thirdparty WHERE uid = '$third_id';");
							while($row3 = mysqli_fetch_array($sql3))
							{
							echo '<li class="collection-item">
                            <div class="row">
							<p><strong>Name: </strong>'.$row3['uname'].'</p>
							<p><strong>Address: </strong>'.$row3['address'].'</p>
							'.($row3['phone'] == '' ? '' : '<p><strong>Contact: </strong>'.$row3['phone'].'</p>').'	
							'.($row3['email'] == '' ? '' : '<p><strong>Email: </strong>'.$row3['email'].'</p>').'		
							'.(!empty($row['description']) ? '<p><strong>Note: </strong>'.$row['description'].'</p>' : '').'								
                            </li>';	

                             if($row['accepted']==1){ 
                              $row4 = mysqli_fetch_array($sql4);
                            echo '<strong>Service Provider Info</strong><li class="collection-item">
                            <div class="row">
              <p><strong>Name: </strong>'.$row4['uname'].'</p>
              <p><strong>Address: </strong>'.$row4['address'].'</p>
              '.($row3['phone'] == '' ? '' : '<p><strong>Contact: </strong>'.$row4['number'].'</p>').' 
              '.($row3['email'] == '' ? '' : '<p><strong>Email: </strong>'.$row4['email'].'</p>').'   
              '.(!empty($row['description']) ? '<p><strong>Note: </strong>'.$row4['description'].'</p>' : '').'                
                            </li>'; 
                            }  
                            if ($row['completed']==1) {
                            	$accdate=strtotime($row['acceptedtime']);
                            	$comdate=strtotime($row['completedtime']);
                            	$diff=$comdate-$accdate;
                            	$years = floor($diff / (365*60*60*24));
								$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
								$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
								

								
                            	//echo $accdate;
                            	$hours=round($diff/(60*60),3);
                            	echo '<li class="collection-item">
                            <div class="row">';
                            if($days>1){echo '<p><strong>Completed In Duration </strong>'.$days.'days</p>';
              echo ' </li>';}
                            elseif ($hours>1) {            
                            echo '<p><strong>Completed In Duration </strong>'.$hours.'hours</p>';
              echo ' </li>';}
              else {
              	$hours=round($diff/(60),3);
              	echo '<p><strong>Completed In Duration </strong>'.$hours.'Min</p>';
              echo ' </li>';


              } 
                            			
                            		}		
                           					
							}
						$row1 = mysqli_fetch_array($sql1);
						$item_id = $row1['ssid'];
						
						$sql2 = mysqli_query($db, "select subservice.*,service.name as NAM from subservice,service  WHERE ssid = $item_id and subservice.sid=service.sid;");
						$row2 = mysqli_fetch_array($sql2);
						$item_name = $row2['name'];
						$x=$row2['name'];
							echo '<li class="collection-item">
                            <div class="row">
                            <div class="col s7">
                            <p class="collections-title"><strong>#'.$row2['NAM'].'</strong> '."".'</p>
                            </div>
                            <div class="col s3">
                            <span> '.$x.'</span>
                            </div>
                            </div>
                            </li>';
						
						
								echo'<li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title"> Total</p>
                                            </div>
                                            <div class="col s2">
											<span> </span>
                                            </div>
                                            <div class="col s3">
                                                <span><strong>'.$row2['cost'].'</strong></span>
                                            </div>';										
								// if(!$deleted){
								// echo '<button class="btn waves-effect waves-light right submit" type="submit" name="action">Cancel Order
        //                                       <i class="mdi-content-clear right"></i> 
								// 		</button>
								// 		</form>';
								// }
								echo'</div></li>';
					}
					?>
					</ul>
                </div>
              </div>
            </div>
        </div>
        <!--end container-->






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

 <!-- jQuery Library -->
    <script type="text/javascript" src="admin/js/plugins/jquery-1.11.2.min.js"></script>    
    <!--angularjs-->
    <script type="text/javascript" src="admin/js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="admin/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>       
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="admin/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="admin/js/custom-script.js"></script>
</body>
</html>
