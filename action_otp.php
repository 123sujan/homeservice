<?php

   session_start();
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbase = 'homeservice';

   $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase);


    
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
        
 
    $uid = $_SESSION['uid'];
   
    $sql = mysqli_query($db, "SELECT phone FROM users where uid = '$uid'");
       $row = $sql->fetch_assoc();

    $mobile= $row['phone'];
    
   
    $APIKey='4abf258b-5e2e-11ea-9fa5-0200cd936042';
    $OTPMessage="<p>We have sent an OTP to $mobile,<br>Please enter the same below</p>";
    
    
    $otpValue=(( isset($_REQUEST['otp']) AND $_REQUEST['otp']<>'' ) ? $_REQUEST['otp'] : '' );
    
    if ( $otpValue =='' AND $mobile=="")
    {
        echo "<script type='text/javascript'> window.history.back(); </script>";
        die();
        session_destroy();
    }
   

    if ( ( $mobile =='' OR strlen($mobile) <>10 OR substr($mobile,0,2) < 60) )
    {
        echo "<script type='text/javascript'> alert('Please enter valid mobile number');window.history.back(); </script>";
        die();
        session_destroy();
    }
     if ( $otpValue <> '') {
        
        $VerificationSessionId=$_REQUEST['VerificationSessionId'];
        $API_Response_json=json_decode(file_get_contents("https://2factor.in/API/V1/$APIKey/SMS/VERIFY/$VerificationSessionId/$otpValue"),false);
        $VerificationStatus= $API_Response_json->Details;
            
          
            if ( $VerificationStatus =='OTP Matched')
            {
               
            
             $messege = "Yeah !!! Registration Confirmed. ";
             echo "<script type='text/javascript' >alert('$messege');";
             echo "window.location.href='log.php';</script>";
             session_destroy();    
                die();
                
            }
            else
            {
                echo "<script type='text/javascript'>alert('Sorry, OTP entered was incorrect. Please enter correct OTP');  window.history.back();  </script>";
                 $sql = mysqli_query($db, "delete from users where uid = '$uid'");
                session_destroy();
                die();
            }

        }
        
    
    else
    {    
            echo "$mobile";
            $API_Response_json=json_decode(file_get_contents("https://2factor.in/API/V1/$APIKey/SMS/$mobile/AUTOGEN"),false);
            $VerificationSessionId= $API_Response_json->Details;
            
    }

?>






<html>
   <head>
      <meta charset="UTF-8">
   </head>
   <body >
    <center>
      <form action="action_otp.php?id=" method="post">
        <h1> Password:</h1>  <br>
         <input type="text" id='otp' name="otp"  placeholder="XXXXXX"  required="required">	
         <input type="hidden"  name="VerificationSessionId" value="<?php echo $VerificationSessionId; ?>" >
         <input type="hidden" name="name" value="<?php echo $name; ?>"  >	
          <input type="hidden" name="email" value="<?php echo $email; ?>"  >

         <input type="hidden"  name="phone" value="<?php echo $mobile; ?>" >
         <input type="submit" value="Submit">
      </form>
      </center>
   </body>
</html>
 <style>
body {
  background-image: url('otp.jpg');
}
form {
   position: absolute;
    top: 40%;
    left: 40%;
}

</style> 

