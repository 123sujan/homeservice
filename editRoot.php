<?php
include("config.php");
session_start();

if(isset($_POST['complete'])){
  if(!isset($_SESSION))session_start();
    $completeddate=date('Y-m-d h-m-s');
    //echo $completeddate;
    
    $subcheck1 = (isset($_POST['YYY'])) ? 1 : 0;
    $sql1 = "update trans set completed=$subcheck1,tid='$_SESSION[tid]',completedtime='$completeddate'  where uid='$_POST[uid]' and id=$_POST[id]";
    echo $sql1;
    $query1 = mysqli_query($db,$sql1);

    if($subcheck1==1){
      header("location:a.py");
        //send mail
        $sql2 = "select * from users where uid='$_POST[uid]'";
        $query2 = mysqli_query($db,$sql2);
        $row2 = $query2->fetch_assoc();

  $sql3 = "select * from trans where transid='$_POST[transid]'";
        $query3 = mysqli_query($db,$sql3);
        $row3 = $query3->fetch_assoc();
        //echo shell_exec("sh /tmp/a.sh");
        //echo exec("sh /tmp/a.sh");
        //echo system("sh /tmp/a.sh");
        echo "<pre>".system("python2 b.py $row2[email] $row3[transid] 2>&1 &")."</pre>";
        echo '<script language="javascript">';
        echo 'alert(Email sent)';  
        echo '</script>';
        header("location:editRoot.php");
        exit(0);
    }
   
}


if(isset($_POST['accept'])){
    if(!isset($_SESSION))session_start();
    $accepteddate=date('Y-m-d h-m-s');

    $subcheck = (isset($_POST['XXX'])) ? 1 : 0;
    $sql = "update trans set accepted=$subcheck,tid='$_SESSION[tid]',acceptedtime='$accepteddate' where uid='$_POST[uid]' and id=$_POST[id]";
   // echo $sql;
    $query = mysqli_query($db,$sql);
    if($subcheck==1){

        //send mail
        $sql2 = "select * from users where uid='$_POST[uid]'";
        $query2 = mysqli_query($db,$sql2);
        $row2 = $query2->fetch_assoc();

	$sql3 = "select * from trans where transid='$_POST[transid]'";
        $query3 = mysqli_query($db,$sql3);
        $row3 = $query3->fetch_assoc();

        $sql4 = "select * from thirdparty where uid='$_SESSION[tid]'";
        $query4 = mysqli_query($db,$sql4);
        $row4 = $query4->fetch_assoc();
        //echo shell_exec("sh /tmp/a.sh");
        //echo exec("sh /tmp/a.sh");
        //echo system("sh /tmp/a.sh");
        echo "<pre>".system("python2 a.py $row2[email] $row3[transid] $row4[number] $row4[uname] 2>&1 &")."</pre>";
        echo '<script language="javascript">';
        echo 'alert(Email sent)';  
        echo '</script>';
       header("location:editRoot.php");
        exit(0);
    }
    //echo ("<script LANGUAGE='JavaScript'>window.alert('We have recivved your payemtnt. Check notification for further.');window.location.href='index.php';</script>");  
}

 
$sql = "select t.id,u.uid,u.uname,t.bookedtime,ss.name,t.customerPaid,t.accepted,ss.cost,t.transid from trans t,users u,subservice ss,service s where u.uid=t.uid and ss.ssid=t.ssid and t.accepted=False and s.sid=ss.sid and s.name='$_SESSION[trole]';";
//echo $sql;
$query = mysqli_query($db,$sql);
if(!isset($_SESSION['tid'])){
    header("location:log.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
</head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
           window.location.hash = hash;
      });
    }
});
</script>
<style class="cp-pen-styles">body {
    background: #333 url(https://jackrugile.com/images/misc/noise-diagonal.png);
    color: #444;
    font: 100% 'Helvetica Neue', helvetica, arial, 'sans-serif';
    text-shadow: 0 1px 0 #fff;
}
input{
width:100%;
}
strong {
    font-weight: bold;
}
em {
    font-style: italic;
}
table {
    background: #f5f5f5;
    border-collapse: separate;
    box-shadow: inset 0 1px 0 #fff;
    font-size: 12px;
    line-height: 24px;
    margin: 30px auto;
    text-align: left;
    width: 90%;
}  
th {
    background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
    border-left: 1px solid #555;
    border-right: 1px solid #777;
    border-top: 1px solid #555;
    border-bottom: 1px solid #333;
    box-shadow: inset 0 1px 0 #999;
    color: #fff;
  font-weight: bold;
    padding: 10px 15px;
    position: relative;
    text-shadow: 0 1px 0 #000; 
}
th:after {
    background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
    content: '';
    display: block;
    height: 25%;
    left: 0;
    margin: 1px 0 0 0;
    position: absolute;
    top: 25%;
    width: 100%;
}
th:first-child {
    border-left: 1px solid #777;   
    box-shadow: inset 1px 1px 0 #999;
}
th:last-child {
    box-shadow: inset -1px 1px 0 #999;
}
td {
    border-right: 1px solid #fff;
    border-left: 1px solid #e8e8e8;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #e8e8e8;
    padding: 10px 15px;
    position: relative;
    transition: all 300ms;
}
td:first-child {
    box-shadow: inset 1px 0 0 #fff;
}  
td:last-child {
    border-right: 1px solid #e8e8e8;
    box-shadow: inset -1px 0 0 #fff;
}  
tr {
    background: url(https://jackrugile.com/images/misc/noise-diagonal.png);
}
tr:nth-child(odd) td {
    background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png);
}
tr:last-of-type td {
    box-shadow: inset 0 -1px 0 #fff;
}
tr:last-of-type td:first-child {
    box-shadow: inset 1px -1px 0 #fff;
}  
tr:last-of-type td:last-child {
    box-shadow: inset -1px -1px 0 #fff;
}  
tbody:hover td {
    color: transparent;
    text-shadow: 0 0 3px #aaa;
}
tbody:hover tr:hover td {
    color: #444;
    text-shadow: 0 1px 0 #fff;
}</style>
<body>
<center>Ready to be accepted by you </center>
<a href="logout.php" style="color: blue; font-size: 30px;text-align: right;margin-left: 90%; ">Logout</a>
    <table id="bro">
  <thead>
    <tr>
      <th>Transaction Id</th>
      <th>Customer Name</th>
      <th>Booked Time</th>
      <th>SubServerice Type</th>
      <th>Billing Amount</th>
      <th>Customer Paid?</th>
      <th>Accept it</th>
      <th>Options</th>
      <?php
      if(isset($_COOKIE['admin'])){
         echo "<th>edit</th>";
         echo "<th>delete</th>";
      }
      ?>
      <th style="display:none;">Sex</th>
      <th style="display:none;">Sex</th>
    </tr>
  </thead>
  <tbody>
  <?php
        while($row = $query->fetch_assoc()) {
            echo "<form method=\"POST\" action=\"\">";
            echo"<tr><td><strong><label>$row[transid]</label></strong></td>";
            echo"<td><strong><label>$row[uname]</label></strong></td>";
            echo"<td><strong>$row[bookedtime]</strong></td>";
           
            echo"<td><strong><label>$row[name]</label></strong></td>";
            echo"<td><strong><label>$row[cost]</label></strong></td>";
            echo"<td><strong><input type='checkbox' value='$row[customerPaid]' name='cp'";
 
 
 
            if($row['customerPaid']==1)echo "  disabled checked></input></strong></td>";
            else echo "disabled></input></strong></td>";
           
            echo"<td><strong><input type='checkbox' value='$row[accepted]' name='XXX'";
            if($row['accepted']==1)echo "  checked></input></strong></td>";
            else echo "></input></strong></td>";
            echo"<td><center><input type='submit' name='accept' value='accept'></input></center></td>";
            echo "</tr>";
        echo "<input type='hidden' value='$row[uid]' name='uid'></input>";
        echo "<input type='hidden' value='$row[id]' name='id'></input>";
 	      echo "<input type='hidden' value='$row[transid]' name='transid'></input>";
            echo "</form>";
        }
    ?>
  </tbody>
</table>

 
 
  <table id="bro">
  <thead>
    <tr>
      <th>Transaction Id</th>
      <th>Customer Name</th>
      <th>Booked Time</th>
      <th>Phone number</th>
      <th>SubServerice Type</th>
      <th>Billing Amount</th>
      <th>Address</th>
      <th>Completed</th>
      <th>Options</th>
      <?php
      if(isset($_COOKIE['admin'])){
         echo "<th>edit</th>";
         echo "<th>delete</th>";
      }
      ?>
      <th style="display:none;">Sex</th>
      <th style="display:none;">Sex</th>
    </tr>
  </thead>
  <tbody>
  <center>Accepted by you </center>
  <?php
        $sql = "select t.id,u.uid,u.uname,t.bookedtime,ss.name,t.customerPaid,t.accepted,ss.cost,u.address,t.transid,t.completed,u.phone from trans t,users u,subservice ss where u.uid=t.uid and ss.ssid=t.ssid and t.accepted=True and t.completed=False and t.tid='$_SESSION[tid]' ";
      //echo $sql;
        $query = mysqli_query($db,$sql);
        while($row = $query->fetch_assoc()) {
            echo "<form method=\"POST\" action=\"\">";
            echo    "<tr><td><strong><label>$row[transid]</label></strong></td>";
            echo    "<td><strong><label>$row[uname]</label></strong></td>";
            echo    "<td><strong>$row[bookedtime]</strong></td>";
           echo    "<td><strong><label>$row[phone]</label></strong></td>";
            echo    "<td><strong><label>$row[name]</label></strong></td>";
            echo    "<td><strong><label>$row[cost]</label></strong></td>";
            echo    "<td><strong><label>$row[address]</label></strong></td>";
            echo"<td><strong><input type='checkbox' value='$row[completed]' name='YYY'";
            if($row['completed']==1)echo "  checked></input></strong></td>";
            else echo "></input></strong></td>";
            echo"<td><center><input type='submit' name='complete' value='complete'></input></center></td>";
            echo "</tr>";
              echo "<input type='hidden' value='$row[uid]' name='uid'></input>";
        echo "<input type='hidden' value='$row[id]' name='id'></input>";
        echo "<input type='hidden' value='$row[transid]' name='transid'></input>";
            echo "</form>";
        }

    ?>
  </tbody>
</table>





<!-- completed -->
<table id="bro">
  <thead>
    <tr>
      <th>Transaction Id</th>
      <th>Customer Name</th>
      <th>Booked Time</th>
       <!-- <th>Phone</th> -->
      <th>SubServerice Type</th>
      <th>Billing Amount</th>
      <th>Address</th>
      <?php
      if(isset($_COOKIE['admin'])){
         echo "<th>edit</th>";
         echo "<th>delete</th>";
      }
      ?>
      <th style="display:none;">Sex</th>
      <th style="display:none;">Sex</th>
    </tr>
  </thead>
  <tbody>
  <center>Completed by you </center>
  <?php
        $sql = "select u.uname,t.bookedtime,ss.name,t.customerPaid,t.accepted,ss.cost,u.address,t.transid from trans t,users u,subservice ss where u.uid=t.uid and ss.ssid=t.ssid and t.accepted=True and t.completed=True and t.tid='$_SESSION[tid]' ";
      //echo $sql;
        $query = mysqli_query($db,$sql);
        while($row = $query->fetch_assoc()) {
            echo "<form method=\"GET\" action=\"\">";
            echo    "<tr><td><strong><label>$row[transid]</label></strong></td>";

            echo    "<td><strong><label>$row[uname]</label></strong></td>";
            echo    "<td><strong>$row[bookedtime]</strong></td>";
          // echo    "<td><strong><label>$row[phone]</label></strong></td>";
            echo    "<td><strong><label>$row[name]</label></strong></td>";
            echo    "<td><strong><label>$row[cost]</label></strong></td>";
            echo    "<td><strong><label>$row[address]</label></strong></td>";
            echo "</tr>";
            echo "</form>";
        }
    ?>
  </tbody>
</table>






</body>
<script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/custom.js"></script>
</html>
