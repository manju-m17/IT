<html>
	<head>
		<?php
	session_start();
	$db_host="localhost";
	$db_user="root";
	$db_pass="panda2hbo";
	$db_name="elegant";

	$dbh=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Error connecting to Databsase");
  $query1="select * from booking order by hr,date";
  	$result1=mysqli_query($dbh,$query1);
?>
	<style>
		.table{
			float:left;
			margin-right:5px;
		}
		.tab{
			//float: left;
			margin-left:5%;
			width:90%;
		}
	</style>

  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width'>
  <title>Appointment</title>
  <link rel='stylesheet' href='./style2.css'>
  <link rel='stylesheet' type='text/css' href='source/bootstrap-3.3.6-dist/css/bootstrap.css'>
<link rel='stylesheet' type='text/css' href='source/font-awesome-4.5.0/css/font-awesome.css'>
<link rel='stylesheet' type='text/css' href='style/mystyle.css'>

	</head>
	<body>
<div class="header">
    			<ul class="socialicon">
    				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
    				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
    				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
    			</ul>

    			<ul class="givusacall">
    				<li>Give us a call : +91 9019090292 </li>
    			</ul>

          <ul class="logreg">

            <li><a href="index.html">Logout</li>
							<li><a href="adminfeed.php"><span class="register">Feedbacks</span></a></li>

          </ul>
    </div>

    <div class="feturedsection">
      <h1 class="text-center"><span class="bdots">&bullet;</span> E L E G A N T <span class="carstxt"> C A R - S P A </span>&bullet;</h1>
      <h1 class="text-center"></span>&bullet;<span class="carstxt">Appointments</span>&bullet;</h1>
    </div>

<div class="tab">
<table class="table" border=1px rules="all">
<center>
		<tr>
			<th>Username</th>
			<th>Date</th>
	<th>Month</th>
	<th>Year</th>
	<th>Hour</th>
	<th>Minutes</th>
	<th>Vehicle-Type</th>
	<th>Service-Type</th>
	<th>Vehicle-No</th>


		</tr>
		<?php while($row1=mysqli_fetch_array($result1)){ ?>
		<tr>
			<td><?php echo $row1['user']; ?></td>
			<td><?php echo $row1['date']; ?></td>
      <td><?php echo $row1['month']; ?></td>
      <td><?php echo $row1['year']; ?></td>
      <td><?php echo $row1['hr']; ?></td>
      <td><?php echo $row1['min']; ?></td>
      <td><?php echo $row1['vehicle']; ?></td>
      <td><?php echo $row1['service']; ?></td>
      <td><?php echo $row1['vehicle_no']; ?></td>
		</tr>
<?php }?>
		</table>
</center>
</div>

</body>
</html>
