<?php

session_start();
	date_default_timezone_set("Asia/Kuala_Lumpur");
	print'<font color=”#ADD8E6>Login Successfully! Welcome: '.$_SESSION['username'].'</font>';
	print '<br>you have been log in since:'.date('h:i:sa',$_SESSION['loggedin']);
	print'<br><a href="logout.php">Click here to log out</a><br>';
			

if(!empty($_POST['submitted'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phoneNumber = $_POST['phoneNumber'];
	
	if(empty($username)){
		echo	"User Name has to be filled!<br>";
	}
	if(empty($email)){
		echo	"A valid e-mail has to be entered!<br>";
	}
	if(empty($password)||strlen($password)<"8"){
		echo	"Password has to be set with at least 8 characters of numbers and alphabate or any of them!<br>";
	}
	if(empty($phoneNumber)||!is_numeric($phoneNumber)){
		echo	"A valid phone number has to be filled!<br>";
	}
	
		if(!empty($username)&&!empty($email)&&!empty($password)&&!empty($phoneNumber)&&strlen($password)>="8"&&is_numeric($phoneNumber)){
		
		
		$dbc = @mysqli_connect('localhost','root','');
		
		mysqli_select_db($dbc,'user_list');
		
		$problem = FALSE;
		if(!empty($_POST['email'])&&!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['phoneNumber'])){
			$email = trim($_POST['email']);
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			$phonenumber = trim($_POST['phoneNumber']);
		}
		if(!$problem){
		
			$query = "INSERT INTO user_list(entry_id, email, username, password,phonenumber,date_entered) VALUES (0, '$email','$username','$password','$phoneNumber',NOW())";
			if(@mysqli_query($dbc, $query)){
				print'<p>Congratulations!<br>You have successfully Registered!</p>';
			}
			else{
				print	'<p style="color:red;">Could not add the entry because:<br/>'.mysqli_error($dbc).'</p><p>The query
			was:'.$query.'</p>';
			}
		}
		mysqli_close($dbc);
		}
	
	
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <meta name="description" content="The best website for collage comparison in Penang">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main">
<div class="page">
<!-- #header start -->
<?php include ("header.php"); ?>
<!-- /#header end -->

<div class="content">

<form action="register.php" method="POST">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email"><br>
	
	<label for="username"><b>User Name</b></label><br>
    <input type="text" placeholder="Enter User Name" name="username"><br>
	
	<label for="psw"><b>Password</b></label><br>
	<input type="password" placeholder="Enter Password" name="password"><br>
	
	<label for="phoneNumber"><b>Phone Number</b></label><br>
	<input type="text" placeholder="Enter Phone Number" name="phoneNumber"><br>
    <hr>
	
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="registerbtn">Register</button>
	<input type="hidden" name="submitted" value="true">

    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
</form>

</div>

<!-- #footer start -->
<?php include ("footer.php") ?>
<!-- /#footer end -->

</div>
</div>
</body></html>