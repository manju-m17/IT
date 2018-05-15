<!DOCTYPE html>

<html>

  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width'>
    <title>Feedback</title>
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
        <li><a href="index.html"><span class="register">Logout</span></a></li>
      </ul>
</div>

<div class="feturedsection">
  <h1 class="text-center"><span class="bdots">&bullet;</span> E L E G A N T <span class="carstxt"> C A R - S P A </span>&bullet;</h1>
  <h1 class="text-center"><span class="bdots">&bullet;</span>Feedback Is The Breakfast of Champions<span class="carstxt"></span>&bullet;</h1>

</div>
<?php
session_start();
echo"
<div class='container3'>
    <form name='myForm'  action='feed.php' method='POST'>
<h2>Questionnaire:</h2>

<div class='service'>
  <p>How much do you rate our service:</p> <select name='service'>
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
</select>
</div>

<br>
<div class='work'>
  <p>How Happy are you with our work</p> <select name='work' >
  <option value='01'>01</option>
  <option value='02'>02</option>
  <option value='13'>03</option>
  <option value='4'>04</option>
  <option value='5'>05</option>
  <option value='6'>06</option>
  <option value='7'>07</option>
  <option value='8'>08</option>
  <option value='9'>09</option>
  <option value='10'>10</option>
</select>
</div>

<br>

<div class='type'>
  <p>Are you satisfied with our pricing of services:</p>
  <select name='price' required>
  <option value='01'>01</option>
  <option value='02'>02</option>
  <option value='13'>03</option>
  <option value='4'>04</option>
  <option value='5'>05</option>
  <option value='6'>06</option>
  <option value='7'>07</option>
  <option value='8'>08</option>
  <option value='9'>09</option>
  <option value='10'>10</option>
</select>
</div>

<br>
<div class='service'>
  <p>How likely is it that you would recommend our service to a friend or colleague? </p>
  <select name='recomend' required>
  <option value='01'>01</option>
  <option value='02'>02</option>
  <option value='13'>03</option>
  <option value='4'>04</option>
  <option value='5'>05</option>
  <option value='6'>06</option>
  <option value='7'>07</option>
  <option value='8'>08</option>
  <option value='9'>09</option>
  <option value='10'>10</option>
  </select>

</div>
<br>
<p>Any Suggestions:</p><input type='text' name='suggestion'>

<br>


     <br><input type='submit' name='submit' value='Send Feedback'></br>
</form>
</div>
";
?>
</body>
</html>
