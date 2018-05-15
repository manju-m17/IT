<?php
session_start();
$db_host="localhost";
$db_user="root";
$db_password="panda2hbo";
$db_name="elegant";
$user=$_SESSION['user'];
$service=$_POST['service'];
$work=$_POST['work'];
$price=$_POST['price'];
$recomend=$_POST['recomend'];
$suggestion=$_POST['suggestion'];
$con=mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("Error querying database");
$query1="insert into feedback values('$user','$service','$work','$price','$recomend','$suggestion');";
$result=mysqli_query($con,$query1) or die("Error querying3 database");
header('location:feedback.php');

?>
