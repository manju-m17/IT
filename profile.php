<?php
session_start();
$db_host="localhost";
$db_user="root";
$db_password="panda2hbo";
$db_name="elegant";

$name=$_POST['user'];
$pw=$_POST['pass'];
$_SESSION['user']=$name;

$con=mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("Error querying database");
echo "string";
$query="select * from user";
$result=mysqli_query($con,$query) or die("Error queryong database");
$row=mysqli_fetch_array($result);

$con=mysqli_connect($db_host,$db_user,$db_password,$db_name) or die("Error querying1 database");
$query="select * from user where username='$name' and password='$pw'";
$result=mysqli_query($con,$query) or die("Error querying database");
$row=mysqli_fetch_array($result);
if($row['password']==$pw && $row['type']==1)
{
	header('location:appoint.php');
}
elseif($row['password']==$pw && $row['username']==$name)
{
header('location:bookappoint.php');
}
else
{
echo "Error invalid password<br />";
echo "<a href='login.php'>GO BACK";
}
?>
