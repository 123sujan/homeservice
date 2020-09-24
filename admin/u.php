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
            <li class="bold"><a href="index.php" class="waves-effect waves-cyan"><i class="mdi-editor-border-color"></i> Services</a>
            </li>
              
                        <li class="bold"><a href="orders.php" class=" waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Orders</a>
                            
                        </li>
                                   
                        <li class="bold"><a href="all-tickets.php" class=" waves-effect waves-cyan"><i class="mdi-action-question-answer"></i> CUSTOMER SUPPORT</a>
                            
                        </li>
                   		
            <li class="bold active"><a href="u.php" class="waves-effect waves-cyan"><i class="mdi-social-person"></i> Users</a>
            </li>		
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <li class="bold"><a href="track.php" class="waves-effect waves-cyan"><i class="fa fa-search"></i> Track</a>
            </li> 
            <li class="bold"><a href="between_report.php" class="waves-effect waves-cyan"><i class="glyphicon glyphicon-calendar"></i> B/w dates report</a>
            </li>       		
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">

        
		  <!-- <form class="formValidate" id="formValidate" method="post" action="routers/menu-router.php" novalidate="novalidate"> -->
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Users</h4>
              </div>
              <div>
				<table id="data-table-admin" class="responsive-table display" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Role</th>
                        <th>Username</th><th>Email</th><th>Password</th>
                        <th>Joined</th>
                        <th>DateofBirth</th>
                        <th>Adress</th>
                        <th>Track orders</th>
                      </tr>
                    </thead>
<!--
                    <tbody>
				<?php
				/*$result = mysqli_query($con, "SELECT * FROM items");
				while($row = mysqli_fetch_array($result))
				{
					echo '<tr><td><div class="input-field col s12"><label for="'.$row["id"].'_name">Name</label>';
					echo '<input value="'.$row["name"].'" id="'.$row["id"].'_name" name="'.$row['id'].'_name" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td>';					
					echo '<td><div class="input-field col s12 "><label for="'.$row["id"].'_price">Price</label>';
					echo '<input value="'.$row["price"].'" id="'.$row["id"].'_price" name="'.$row['id'].'_price" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td>';                   
					echo '<td>';
					if($row['deleted'] == 0){
						$text1 = 'selected';
						$text2 = '';
					}
					else{
						$text1 = '';
						$text2 = 'selected';						
					}
					echo '<select name="'.$row['id'].'_hide">
                      <option value="1"'.$text1.'>Available</option>
                      <option value="2"'.$text2.'>Not Available</option>
                    </select></td></tr>';
				}*/
				?>
				
				
				
				
				
				
                    </tbody> -->
                    <!--
                     <tbody>
				<tr><td><div class="input-field col s12"><label for="1_name">Name</label><input value="Item 1" id="1_name" name="1_name" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td><td><div class="input-field col s12 "><label for="1_price">Price</label><input value="25" id="1_price" name="1_price" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td><td><select name="1_hide">
                      <option value="1">Available</option>
                      <option value="2"selected>Not Available</option>
                    </select></td></tr>
                <tr><td><div class="input-field col s12"><label for="2_name">Name</label><input value="Item 2" id="2_name" name="2_name" type="text" data-error=".errorTxt2"><div class="errorTxt2"></div></td><td><div class="input-field col s12 "><label for="2_price">Price</label><input value="45" id="2_price" name="2_price" type="text" data-error=".errorTxt2"><div class="errorTxt2"></div></td><td><select name="2_hide">
                      <option value="1"selected>Available</option>
                      <option value="2">Not Available</option>
                    </select></td></tr>
                    -->
                    
                    <tbody>
                    <?php
                    	include("../config.php");
                    	$sql = "select * from users ;";
                    	$query = mysqli_query($db,$sql);
                    	while($row = $query->fetch_assoc()) {
                    		echo '<tr>
                    			<input type="hidden" name="uid" value="'.$row['uid'].'"></input>
                    			<input type="hidden" name="DEV2" value="0"></input>
                    			
                    			
                    			<td><div class="input-field col s12"><label for="1_name">Role</label><input value="'.$row['role'].'" id="1_name" name="role" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                    			<td><div class="input-field col s12"><label for="1_name">Usernmae</label><input value="'.$row['uname'].'" id="1_name" name="uname" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                    			<td><div class="input-field col s12"><label for="1_name">Email</label><input value="'.$row['email'].'" id="email" name="email" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                    			<td><div class="input-field col s12"><label for="1_name">Password</label><input value="******" id="1_name" name="password" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                    			<td><div class="input-field col s12 "><input value="'.$row['joined'].'" id="1_price" name="joined" type="date" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                    			<td><div class="input-field col s12 "><input value="'.$row['dob'].'" id="1_price" name="dob" type="date" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                    			<td><div class="input-field col s12 "><label for="1_price">Adress</label><input value="'.$row['address'].'" id="1_price" name="address" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                    			
                    			
                              <td><span><a HREF="track.php?uid='.$row['uid'].'" class="btn cyan waves-effect waves-light right">Track Order</a></span></td>
                    			</tr>';
                    	}
                    ?>
                    </tbody>
</table>
              </div>






              <!-- sujan -->
               <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Third Party</h4>
              </div>
              <div>
        <table id="data-table-admin" class="responsive-table display" cellspacing="0">
                    <thead>
                      <tr>
                      
                        <th>Username</th><th>Email</th><th>Password</th>
                        <th>Joined</th>
                        <th>DateofBirth</th>
                        <th>Number</th>
                        <th>Address</th>

                        <th>Modify</th>
                      </tr>
                    </thead>
<!--
                    <tbody>
        <?php
        /*$result = mysqli_query($con, "SELECT * FROM items");
        while($row = mysqli_fetch_array($result))
        {
          echo '<tr><td><div class="input-field col s12"><label for="'.$row["id"].'_name">Name</label>';
          echo '<input value="'.$row["name"].'" id="'.$row["id"].'_name" name="'.$row['id'].'_name" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td>';          
          echo '<td><div class="input-field col s12 "><label for="'.$row["id"].'_price">Price</label>';
          echo '<input value="'.$row["price"].'" id="'.$row["id"].'_price" name="'.$row['id'].'_price" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td>';                   
          echo '<td>';
          if($row['deleted'] == 0){
            $text1 = 'selected';
            $text2 = '';
          }
          else{
            $text1 = '';
            $text2 = 'selected';            
          }
          echo '<select name="'.$row['id'].'_hide">
                      <option value="1"'.$text1.'>Available</option>
                      <option value="2"'.$text2.'>Not Available</option>
                    </select></td></tr>';
        }*/
        ?>
        
        
        
        
        
        
                    </tbody> -->
                    <!--
                     <tbody>
        <tr><td><div class="input-field col s12"><label for="1_name">Name</label><input value="Item 1" id="1_name" name="1_name" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td><td><div class="input-field col s12 "><label for="1_price">Price</label><input value="25" id="1_price" name="1_price" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td><td><select name="1_hide">
                      <option value="1">Available</option>
                      <option value="2"selected>Not Available</option>
                    </select></td></tr>
                <tr><td><div class="input-field col s12"><label for="2_name">Name</label><input value="Item 2" id="2_name" name="2_name" type="text" data-error=".errorTxt2"><div class="errorTxt2"></div></td><td><div class="input-field col s12 "><label for="2_price">Price</label><input value="45" id="2_price" name="2_price" type="text" data-error=".errorTxt2"><div class="errorTxt2"></div></td><td><select name="2_hide">
                      <option value="1"selected>Available</option>
                      <option value="2">Not Available</option>
                    </select></td></tr>
                    -->
                    
                    <tbody>
                    <?php
                      include("../config.php");
                      $sql = "select * from thirdparty;";
                      $query = mysqli_query($db,$sql);
                      while($row = $query->fetch_assoc()) {
                        echo '<tr><form class="formValidate" class="form-group" id="formValidate" method="POST" action="modify.php" novalidate="novalidate">
                          <input type="hidden" name="uid" value="'.$row['uid'].'"></input>
                          <input type="hidden" name="DEV2" value="0"></input>
                          
                          
                          
                          <td><div class="input-field col s12"><label for="1_name">Usernmae</label><input value="'.$row['uname'].'" id="1_name" name="uname" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                          <td><div class="input-field col s12"><label for="1_name">Email</label><input value="'.$row['email'].'" id="email" name="email" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                          <td><div class="input-field col s12"><label for="1_name">Password</label><input value="*******" id="1_name" name="password" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                          <td><div class="input-field col s12 "><input value="'.$row['joined'].'" id="1_price" name="joined" type="date" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                          <td><div class="input-field col s12 "><input value="'.$row['dob'].'" id="1_price" name="dob" type="date" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                           <td><div class="input-field col s12 "><label for="1_price">Adress</label><input value="'.$row['number'].'" id="1_price" name="number" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                          <td><div class="input-field col s12 "><label for="1_price">Adress</label><input value="'.$row['address'].'" id="1_price" name="address" type="text" data-error=".errorTxt1"><div class="errorTxt1"></div></td>
                          
                          <td><div class="input-field col s12"><button class="btn cyan waves-effect waves-light right" type="submit" name="modifys">Modify
                                <i class="mdi-content-send right"></i>
                              </button></div></td>
                          </form></tr>';
                      }
                    ?>
                    </tbody>
</table>
              </div>





              <!-- sujan -->
			 
		 
            <div class="divider"></div>
            
          </div>
        </div>
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->




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
	  
</body>

</html>
