<?php
session_start();

if(!empty($_POST['submitted'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username)){
	echo	"User name has to be entered!";
	print'<br>';
	}

	if(empty($password)){
	echo	"Password has to be entered!";
	}
	
	if(!empty($username)&&!empty($password)){
		
		$dbc = @mysqli_connect('localhost','root','');
		
		mysqli_select_db($dbc,'user_list');
		
		$result = mysqli_query($dbc,"SELECT * FROM user_list WHERE username='$username' and password = '$password'")
		or die("Failed to query database".mysqli_error($dbc));
		
		$row = mysqli_fetch_array($result);
		if($row['username']==$username && $row['password'] == $password){
			
			date_default_timezone_set("Asia/Kuala_Lumpur");
			$_SESSION['username']=$row['username'];
			$_SESSION['loggedin']=time();
			print'<font color=”#ADD8E6>Login Successfully! Welcome: '.$_SESSION['username'].'</font>';
			print '<br>you have been log in since:'.date('h:i:sa',$_SESSION['loggedin']);
			print'<br><a href="logout.php">Click here to log out</a>';
			
		}
		else{
			echo"Wrong User Name or Password!";
		}
		
			mysqli_close($dbc);
		
	}
	
	
}
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Log In</title>
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

<form action="login.php" method="POST">

							<div class="container">
								<label for="username"><b>Username</b></label><br>
								<input type="text" placeholder="Enter Username" name="username"><br>

								<label for="password"><b>Password</b></label><br>
								<input type="password" placeholder="Enter Password" name="password"><br>

								<button type="submit" value="submitted">Login</button>

							</div>

							<div class="container">
									<span class="register">register an <a href="register.php">account</a></span>
							</div>
							<input type ="hidden" name = "submitted" value="true">
						</form>

</div>

<!-- #footer start -->
<?php include ("footer.php") ?>
<!-- /#footer end -->

</div>
</div>
</body>
</html>