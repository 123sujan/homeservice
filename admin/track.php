
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>All orders</title>


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
 
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
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
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans);






/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 20%;
  position: absolute;
  top: 10%;
  left: 40%;
}
.search {
  background-image: url(images/searchicon.png);
  background-position: 100% 13px;
  background-repeat: no-repeat;
  width: 60%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
</style>
  <!-- //////////////////////////////////////////////////////////////////////////// -->
<div class="wrap">
   
    <form method="post">

   <input type="search" name="search" class="search" placeholder="Request id or month " >

   </form>
</div>

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
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $name;?> <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal"><?php echo "Administrator";?></p>
                </div>
            </div>
            </li>
            <li class="bold"><a href="index.php" class="waves-effect waves-cyan"><i class="mdi-editor-border-color"></i> Services</a>
            </li>
               
                        <li class="bold"><a href="orders.php" class=" waves-effect waves-cyan "><i class="mdi-editor-insert-invitation"></i> Orders</a>
                            
                        </li>
                    
                
                        <li class="bold"><a href="all-tickets.php" class=" waves-effect waves-cyan"><i class="mdi-action-question-answer"></i> CUSTOMER SUPPORT</a>
                            
                        </li>
                       
            <li class="bold"><a href="u.php" class="waves-effect waves-cyan"><i class="mdi-social-person"></i> Users</a>
            </li>   
             </li>  
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
            <li class="bold active"><a href="track.php" class="waves-effect waves-cyan active"><i class="fa fa-search"></i> Track</a>
            </li> 
            <li class="bold"><a href="between_report.php" class="waves-effect waves-cyan"><i class="glyphicon glyphicon-calendar"></i> B/w dates report</a>
            </li>       
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <?php
      if(isset($_POST['search']) || isset($_GET['uid'])){

      ?>
      <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">All Orders</h5>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <p class="caption">List of orders by customers with details</p>
          <div class="divider"></div>
          <!--editableTable-->
<div id="work-collections" class="seaction">
             
          <?php
          include("../config.php");
          if(isset($_GET['status'])){
            $status = $_GET['status'];
          }
          else{
            $status = '%';
          }


          if(isset($_GET['uid'])){
               $sql = mysqli_query($db, "SELECT * FROM trans where uid='".$_GET[uid]."';");
          }

            elseif(is_numeric($_POST['search'])){
                      $sql8 = mysqli_query($db, "SELECT count(*) FROM trans where MONTH(bookedtime) like '%$_POST[search]%';");
                        $row8 = mysqli_fetch_array($sql8);
                         echo '<p><strong>Number of transation in month: </strong>'.$row8['count(*)'].'</p>';
                         $sql = mysqli_query($db, "SELECT * FROM trans where MONTH(bookedtime) like '%$_POST[search]%';");
                    }
        else {
          $sql = mysqli_query($db, "SELECT * FROM trans where transid like '%$_POST[search]%';");
        }
          echo '<div class="row">
                <div>
                    <h4 class="header">List</h4>
                    <ul id="issues-collection" class="collection">';
                  
                     
          while($row = mysqli_fetch_array($sql))
          {
            $deleted=0;
            $status = $row['accepted'];
            $status1 = $row['completed'];
            echo '<li class="collection-item avatar">
                              <i class="mdi-content-content-paste red circle"></i>
                              <span class="collection-header">Order No. '.$row['id'].'</span></br>
                              <span class="collection-header">Request Id. '.$row['transid'].'</span>
                              <p><strong>Date:</strong> '.$row['bookedtime'].'</p>
                              <p><strong>Payment Type:</strong> Digital Payment</p>               
                <p><strong>Status:</strong> '.($deleted ? $status : '
                <form method="post" action="routers/edit-orders.php">
                  <input type="hidden" value="'.$row['id'].'" name="id">
                <select name="status">
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
              while($row3 = mysqli_fetch_array($sql3) )
              {
              echo '<strong>Customer Info</strong><li class="collection-item">
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
                //    </button>
                //    </form>';
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

      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->
<?php

}

?>


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
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
</body>

</html>
