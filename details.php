<?php 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'homeservice');
$connection= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 

$result = mysqli_query("SELECT temp from subservice");
 while ($row = mysqli_fetch_assoc($result)) {
echo "<div id='link' onClick='addText(\"".$row['temp']."\");'>" . $row['temp'] . "</div>";  
 }


  ?>

<html>
<body>

<form action="details.php" method="GET">
<input id="search" type="text" placeholder="Type here">
<input id="submit" type="submit" value="Search">
</form>
</body>
</html>