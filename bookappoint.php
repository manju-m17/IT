<!DOCTYPE html>

<html>

  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width'>
    <title>Book-Appointment</title>
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

        <li><a href="feedback.php">Give-FeedBack</a> </li>
        <li><a href="index.html"><span class="register">Logout</span></a></li>
      </ul>
</div>

<div class="feturedsection">
  <h1 class="text-center"><span class="bdots">&bullet;</span> E L E G A N T <span class="carstxt"> C A R - S P A </span>&bullet;</h1>
  <h1 class="text-center"><span class="bdots">&bullet;</span>Book<span class="carstxt">Appointment</span>&bullet;</h1>
</div>
<?php
session_start();
echo"
<div class='container3'>
    <form name='myForm' onsubmit='return(validate());' action='book.php' method='POST'>
<h2>Enter Details</h2>

<div class='date'>
  <p>Date:</p> <select name='date'>
  <option value='01'>01</option>
  <option value='02'>02</option>
  <option value='03'>03</option>
  <option value='04'>04</option>
  <option value='05'>05</option>
  <option value='06'>06</option>
  <option value='07'>07</option>
  <option value='08'>08</option>
  <option value='09'>09</option>
  <option value='10'>10</option>
  <option value='11'>11</option>
  <option value='12'>12</option>
  <option value='13'>13</option>
  <option value='14'>14</option>
  <option value='15'>15</option>
  <option value='16'>16</option>
  <option value='17'>17</option>
  <option value='18'>18</option>
  <option value='19'>19</option>
  <option value='20'>20</option>
  <option value='21'>21</option>
  <option value='22'>22</option>
  <option value='23'>23</option>
  <option value='24'>24</option>
  <option value='25'>25</option>
  <option value='26'>26</option>
  <option value='27'>27</option>
  <option value='28'>28</option>
  <option value='29'>29</option>
  <option value='30'>30</option>
  <option value='31'>31</option>
</select>
-
<select name='mon'>
<option value='Jan'>January</option>
<option value='Feb'>February</option>
<option value='Mar'>March</option>
<option value='Apr'>April</option>
<option value='May'>May</option>
<option value='Jun'>June</option>
<option value='Jul'>July</option>
<option value='Aug'>August</option>
<option value='Sep'>September</option>
<option value='Oct'>October</option>
<option value='Nov'>November</option>
<option value='Dec'>December</option>
</select>
-
<select name='year'>
<option value='2018'>2018</option>
<option value='2019'>2019</option>
<option value='2020'>2020</option>
<option value='2021'>2021</option>
<option value='2022'>2022</option>
<option value='2023'>2023</option>
<option value='2024'>2024</option>
<option value='2025'>2025</option>
<option value='2026'>2026</option>
<option value='2027'>2027</option>
<option value='2028'>2028</option>
<option value='2029'>2029</option>
<option value='2030'>2030</option>
</select>
</div>

<br>
<div class='datetime'>
  <p>Time:</p> <select name='hr' >
  <option value='08'>08</option>
  <option value='09'>09</option>
  <option value='10'>10</option>
  <option value='11'>11</option>
  <option value='12'>12</option>
  <option value='13'>13</option>
  <option value='14'>14</option>
  <option value='15'>15</option>
  <option value='16'>16</option>
  <option value='17'>17</option>
  <option value='18'>18</option>
  <option value='19'>19</option>
  <option value='20'>20</option>
</select>

:

<select name='min'>
    <option value='00'>00</option>
    <option value='30'>30</option>

</select>
</div>

<br>

<div class='type'>
  <p>Vehicle-Type:</p>
  <select name='Vehicle-Type' required>
      <option value='sedan'>SEDAN</option>
      <option value='suv'>SUV</option>
      <option value='muv'>MUV</option>
      <option value='truck'>TRUCK</option>
      <option value='bike'>BIKE</option>
</select>
</div>

<br>
<div class='service'>
  <p>Service-Type:</p>
  <select name='Service-Type' required>
      <option value='foam_car'>Car Foam Wash - 700</option>
      <option value='diesel_car'>Car Diesel Wash - 500</option>
      <option value='foam_bike'>Bike Foam Wash - 250</option>
      <option value='diesel_bike'>Bike Diesel Wash - 200</option>
  </select>

</div>
<br>
<p>Vehicle Number:</p><input type='text' name='vehicle' placeholder='KA-03-MJ-9612' required>

<br>


     <br><input type='submit' name='submit' value='Book'></br>
</form>
</div>
";
?>
</body>
</html>
