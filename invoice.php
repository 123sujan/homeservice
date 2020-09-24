<?php
$finalcost=0;
session_start();
$uid=$_SESSION['uid'];
include("config.php");
if(isset($_POST['pay'])){  
    $sql = "update trans set customerPaid=True where uid='$uid'";
    //echo $sql;
    $query = mysqli_query($db,$sql);
    echo ("<script LANGUAGE='JavaScript'>window.alert('We have recivved your payemtnt. Check notification for further.');window.location.href='index.php';</script>");  
}
if(!isset($_SESSION['uid'])){
    echo ("<script LANGUAGE='JavaScript'>window.location.href='index.php';</script>");
}
$sql = "select * from users where uid = '$uid' limit 1";
$query = mysqli_query($db,$sql);
$row = mysqli_fetch_array($query,MYSQLI_ASSOC);
$address=$row['address'];
$phone=$row['phone'];

?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Invoice</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    body {
    background: white;
    /*background-image: url('images/back.jpg');*/
    margin-top: 120px;
    margin-bottom: 120px;
}    </style>
    <script src="jquery.js"></script>
    <script src="bootstrap.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            
                            <img  class="ttr_menu_logo" src="menulogo.png" >
                            <span style="font-family:'Roboto Slab','Arial';font-weight:700;font-size:2.571em;color:rgba(53,181,235,1);">One Click</span>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Invoice #550</p>
                            <p class="text-muted">Due to:<?php echo date(d);?></p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Client Information</p>
                            <p class="mb-1"><?php echo $row['uname'].", ".$row['email']; ?></p>
                            <p><?php echo "Cake Day :   ".$row['dob'];?></p>
                            <p class="mb-1"><?php echo $row['address'];?></p>
                            <p class="mb-1"><?php echo $row['phone'];?></p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Payment Details</p>
                            <p class="mb-1"><span class="text-muted">VAT: </span><?php echo(rand(1000000,9999999));?></p>
                            <p class="mb-1"><span class="text-muted">VAT ID: </span> <?php echo(rand(1000000,9999999));?></p>
                            <p class="mb-1"><span class="text-muted">Payment Type: </span> VISA/DEBIT Card</p>
                            <p class="mb-1"><span class="text-muted">Name: </span> One CLick Services</p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Discount </th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Cancel</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $finalcost=0;
                                        $sql = "select * from trans t,users u,subservice ss where u.uid=t.uid and ss.ssid=t.ssid and customerPaid=False and u.uid='$uid';";
                                       // echo $sql;
                                        $query = mysqli_query($db,$sql);
                                        $i=1;


                                        while($row = $query->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>$i</td>";
                                            echo "<td>$row[name]</td>";
                                            echo "<td>$row[kathe]</td>";
                                            echo "<td>0%</td>";
                                            echo "<td>$row[cost]</td>";
                                            echo "<td>$row[cost]</td>";
                                            echo "<td><input type='button' value='Delete' onClick=\"window.location='del.php?id=$row[id]'\"> </input></td>";
                                            echo "</tr>";
                                            $temp=str_replace("Rs ","",$row[cost]);
                                            $f=$f+(int)$temp;
                                            $i=$i+1;
                                        }
                                        $GLOBALS['i']=$i;
                                    
                                echo "</tbody>";
                            echo "</table>";
                        echo "</div>";
                    echo "</div>";

                    echo "<div class=\"d-flex flex-row-reverse bg-dark text-white p-4\">";
                        echo "<div class=\"py-3 px-5 text-right\">";
                        echo "<div class='mb-2'>Grand Total</div>";
                        echo "<div class='h2 font-weight-light'>$f</div>";
                        echo "</div>";

                        echo "<div class='py-3 px-5 text-right'>";
                        echo "<div class='mb-2'>Discount</div>";
                        echo "<div class='h2 font-weight-light'>0.0%</div>";
                        echo "</div>";

                        echo "<div class='py-3 px-5 text-right'>";
                            echo "<div class='mb-2'>Sub - Total amount</div>";
                            echo "<div class='h2 font-weight-light'>$f </div>";
                        echo "</div>";?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($i>=2){
        echo "<form method='POST' action=''> <div class='text-light mt-5 mb-5 text-center large'>Procced to Checkout: <input type='submit' name='pay' value='Checkout'></input>
        <input type='button' name='print' value='print' onClick='window.print();'></input></div>
        </form>";
    }
    ?>


</div>




</body></html>
