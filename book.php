
<?php
session_start();
$db_host="localhost";
$db_user="root";
$db_password="panda2hbo";
$db_name="elegant";
$user=$_SESSION['user'];
$date=$_POST['date'];
$month=$_POST['mon'];
$year=$_POST['year'];
$hr=$_POST['hr'];
$min=$_POST['min'];
$veh_type=$_POST['Vehicle-Type'];
$service=$_POST['Service-Type'];
$vehicle=$_POST['vehicle'];
$con=mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("Error querying database");
$query="insert into booking values('$user','$date','$month','$year','$hr','$min','$veh_type','$service','$vehicle');";
$result=mysqli_query($con,$query) or die("Error querying3 database");
header('location:feedback.php');

?>
