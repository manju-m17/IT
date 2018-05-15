<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Sign-Up | Welcome</title>
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

	 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
  {
    return (true)
  }

	else
	{
		alert("Please enter a valid mail address");
		document.myForm.email.focus();
		return false;
	}
  if(document.myForm.pass.value=="")
	{
	alert("Please enter valid password!");
	document.myForm.email.focus();
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

        <li><a href="login.php">Login </a> </li>

      </ul>


   <div class="container1">
       <form name="myForm" onsubmit="return(validate());" action="reg.php" method="POST">
   <h2>Sign-Up Here</h2>



				<p>USER-NAME</p>
				<input type="text" placeholder="USERNAME" name="user" required onkeyup="valUSERNAME();" autocomplete="off">
				<p>E-MAIL ADDRESS</p>
				<input type="E-MAIL" placeholder="EMAIL" name="email" required onkeyup="valEMAIL();" autocomplete="off">
				<p>Address</p>
				<input type="text" placeholder="Address" name="address"  autocomplete="off">
				<p>Phone-No</p>
				<input type="text" placeholder="XX XXXX XXXX XX" name="ph_no"  autocomplete="off">
				<p>PASSWORD</p>
				<input type="Password" placeholder="**********" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Alpha-numeric" required>
                <p>CONFIRM-PASSWORD</p>
				<input type="Password" placeholder="**********" name="con_pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Alpha-numeric" required>

				<br><input type="submit" name="submit" value="Register"></br>

			   </form>
</div>




</body>
</html>
