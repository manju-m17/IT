
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Log-In</title>
    <link rel="stylesheet" href="./style2.css">
    <link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">

    <script>
	function validate()
	{
	if(document.myForm.user.value==" "||(!/^[a-zA-Z]*$/g.test(document.myForm.user.value)) || document.myForm.user.value.length < 4)
	{
	alert("Please enter valid name!");
	document.myForm.user.focus();
	return false;
	}

 if(document.myForm.pass.value=="")
	{
	alert("Please enter valid password!");
	document.myForm.pass.focus();
	return false;
	}


	return true;
	}


	</script>


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

        <li><a href="aboutus.html">About-Us </a> </li>
        <li><a href="sign-up.php"><span class="register">Register</span></a></li>
      </ul>

</div>

<?php
session_start();
echo" <div class='container1'>
     <form name='myForm' onsubmit='return(validate());' action='profile.php' method='POST'>
 <h2>Log-In Here</h2>
  <p>USER-NAME</p>
  <input type='text' placeholder='USERNAME' name='user' required onkeyup='valUSERNAME();' autocomplete='off'>
  <p>PASSWORD</p>
  <input type='Password' placeholder='**********' name='pass' pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}' title='Alpha-numeric' required>
   <br><input type='submit' name='submit' value='Login'></br>
  </form>
</div>"; 

?>



</body>
</html>
