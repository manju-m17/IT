
<?php
session_start();
$db_host="localhost";
$db_user="root";
$db_password="panda2hbo";
$db_name="elegant";
$username=$_POST['user'];
$email=$_POST['email'];
$address=$_POST['address'];
$p_no=$_POST['ph_no'];
$password=$_POST['pass'];
$confirm_password=$_POST['con_pass'];

if($password==$confirm_password){
$con=mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("Error querying database");
$query="insert into user values('$username','$email','$address','$p_no','$password','0');";
$result=mysqli_query($con,$query) or die("Error queryong database");
header('location:login.php');
}
else{
  $message = "Passwords do not match";
  echo "<script type='text/javascript'>alert('$message');</script>";
header('location:Sign-Up.php');
}

?>
