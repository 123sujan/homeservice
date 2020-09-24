<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>OneClickService Menu</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">

   <link rel="stylesheet" href="assets/js/plugins/datatables/dataTables.bootstrap4.min.css">

        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

  
     <style type="text/css">
  .input-field div.error{
    position: relative;
    top: -1rem;
    left: 0rem;
    font-size: 0.8rem;
    color:#FF4081;
    -webkit-transform: translateY(0%);
    -ms-transform: translateY(0%);
    -o-transform: translateY(0%);
    transform: translateY(0%);
  }
  .input-field label.active{
      width:100%;
  }
  .left-alert input[type=text] + label:after, 
  .left-alert input[type=password] + label:after, 
  .left-alert input[type=email] + label:after, 
  .left-alert input[type=url] + label:after, 
  .left-alert input[type=time] + label:after,
  .left-alert input[type=date] + label:after, 
  .left-alert input[type=datetime-local] + label:after, 
  .left-alert input[type=tel] + label:after, 
  .left-alert input[type=number] + label:after, 
  .left-alert input[type=search] + label:after, 
  .left-alert textarea.materialize-textarea + label:after{
      left:0px;
  }
  .right-alert input[type=text] + label:after, 
  .right-alert input[type=password] + label:after, 
  .right-alert input[type=email] + label:after, 
  .right-alert input[type=url] + label:after, 
  .right-alert input[type=time] + label:after,
  .right-alert input[type=date] + label:after, 
  .right-alert input[type=datetime-local] + label:after, 
  .right-alert input[type=tel] + label:after, 
  .right-alert input[type=number] + label:after, 
  .right-alert input[type=search] + label:after, 
  .right-alert textarea.materialize-textarea + label:after{
      right:70px;
  }
  </style> 
</head>

<body>
  <!-- Start Page Loading -->
 <!--  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div> -->
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="logo"></a> <span class="logo-text">Logo</span></h1></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
				 <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="routers/logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col col s8 m8 l8">
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Root <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
            </li>
            <li class="bold "><a href="index.php" class="waves-effect waves-cyan"><i class="mdi-editor-border-color"></i>Services </a>
            </li>
            <li class="bold"><a href="orders.php" class="waves-effect waves-cyan"><i class="mdi-social-person"></i> Orders</a>
               </li>  
                    
                        <li class="bold"><a  href="all-tickets.php" class=" waves-effect waves-cyan"><i class="mdi-action-question-answer"></i>CUSTOMER SUPPORT</a>
                        </li>
                   
                   
           	
            <li class="bold"><a href="u.php" class="waves-effect waves-cyan"><i class="mdi-social-person"></i> Users</a>
            </li>	
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <li class="bold"><a href="track.php" class="waves-effect waves-cyan"><i class="fa fa-search"></i> Track</a>
            </li>	
            <li class="bold active"><a href="between_report.php" class="waves-effect waves-cyan"><i class="glyphicon glyphicon-calendar"></i> b/w dates report</a>
            </li> 	
            	
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      >













        
    </div>
    <!-- END WRAPPER -->



  <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                
                    <!-- Register Forms -->
                    <h2 class="content-heading">View Booking</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald ">
                                    <h3 class="block-title">View Booking</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                   
                                    <?php
                  $eid=$_GET['userid'];
                  $req=$_GET['requestid'];
include("../config.php");
$sql="SELECT *,s.name as sname,ss.name as subname,th.uname as thname,th.email as themail,u.uname as cname,u.email as cemail,u.address as cadd from trans as t,users as u,subservice as ss,service as s,thirdparty as th  where u.uid='$eid' and t.transid='$req' and t.ssid=ss.ssid and ss.sid=s.sid and th.uid=t.tid";
//echo $sql;
// $query = $dbh -> prepare($sql);
// $query-> bindParam(':eid', $eid, PDO::PARAM_STR);
// $query->execute();
// $results=$query->fetchAll(PDO::FETCH_OBJ);
$query = mysqli_query($db,$sql);
$count=mysqli_num_rows($query);
if($count==0){
$sql="SELECT *,s.name as sname,ss.name as subname,u.uname as cname,u.email as cemail,u.address as cadd from trans as t,users as u,subservice as ss,service as s  where u.uid='$eid' and t.transid='$req' and t.ssid=ss.ssid and ss.sid=s.sid ";
$query = mysqli_query($db,$sql);

}
$cnt=1;
                           

//if($query->rowCount() > 0)
//{
while($row = $query->fetch_assoc())
{ 

 if($row['completed']=="1"){
                              $accdate=strtotime($row['acceptedtime']);
                              $comdate=strtotime($row['completedtime']);
                              $diff=$comdate-$accdate;
                              $years = floor($diff / (365*60*60*24));
                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                

                
                              //echo $accdate;
                              $hours=round($diff/(60*60),3);
                              
                            if($days>1){$dur=''.$days.'days';
            }
                            elseif ($hours>1) {            
                            $dur=''.$hours.'hours';
              }
              else {
                $hours=round($diff/(60),3);
                $dur=''.$hours.'Min';
              


              } 
            }

   ?>
                            <table border="1" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                                            <tr>
    <th>Booking Number</th>
    <td><?php  echo $row['transid'];?></td>
    <th>Client Name</th>
    <td><?php  echo $row['cname'];?></td>
  </tr>
  

  <tr>
    <th>Mobile Number</th>
    <td><?php  echo $row['phone'];?></td>
   <th>Client Email</th>
    <td><?php  echo $row['cemail'];?></td>
  </tr>
  <tr>
    
    <th>Booking Date</th>
    <td><?php  echo $row['bookedtime'];?></td>
   
     <th> Address</th>
    <td><?php  echo $row['cadd'];?></td>
  </tr>
   <tr>
    
    <th>Service Name</th>
    <td><?php  echo $row['sname'];?></td>
    <th>Accepted By </th>
    <td><?php if($row['thname']=="null"){ echo $row['thname'];} else {echo "NULL";}?></td>
  </tr>
  <tr>
    
    <th>Subservice name</th>
    <td><?php  echo $row['subname'];?></td>
    <th>Accepted email</th> 
    <td><?php if($row['themail']=="null"){ echo $row['themail'];} else { echo "NULL";}?></td>
  </tr>
  <tr>
    
    <th>Accepted</th>
    <td><?php $accep="yet to Accepted";
     if ($row['accepted']=="1"){$accep="accepted";} 
      echo $accep;?></td>
    
    <th>Accepted  Time</th>
    <td><?php if($row['accepted']=="1"){ echo $row['acceptedtime'];} else { echo "Not at accepted";}?></td>
  </tr>
   <tr>
    <th>Service Price</th>
    <td><?php  echo $row['cost'];?></td>
    <th >Completed Time</th>
                     <td><?php if ($row['completed']=="1") { echo $row['completedtime']; } else { echo "Not at completed"; } ?></td>
  </tr>

  <tr>
    
     <th>Order Final Status</th>

    <td> <?php  $comp="yet to completed";
     if ($row['completed']=="1"){$comp="Completed";} 
     echo $comp;
    
// if($row->Status=="Approved")
// {
//   echo "Your Booking has been approved";
// }

// if($row->Status=="Cancelled")
// {
//  echo "Your Booking has been cancelled";
// }


// if($row->Status=="")
// {
//   echo "Not Response Yet";
// }


     ;?></td>
    
     <th>Completed Duration</th>
    <td><?php if($dur!=""){ echo $dur;}else {echo "NULL";} ?></td>

  </tr>
  
 
<?php $cnt=$cnt+1;

}
//}
 ?>

</table> 



                </div>
                

                <!-- END Page Content -->
            </main>







  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        </div>
    </div>
  </footer>
    <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--angularjs-->
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
    
    <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>

     <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.js"></script>
	  
</body>

</html>
