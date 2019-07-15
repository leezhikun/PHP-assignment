<?php
	session_start();
		date_default_timezone_set("Asia/Kuala_Lumpur");
		print'<font color=”#ADD8E6>Login Successfully! Welcome: '.$_SESSION['username'].'</font>';
		print '<br>you have been log in since:'.date('h:i:sa',$_SESSION['loggedin']);
		print'<br><a href="logout.php">Click here to log out</a><br>';
	if(!empty($_POST['submitted'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

	if(empty($name)){
		echo	"Please enter your name";
		print'<br>';
	}

	if(empty($email)){
		echo	"Please enter your email";
	}
	
	if(empty($message)){
		echo	"Please enter your email";
	}


	if(!empty($name)&&!empty($email)&&!empty($message)){
		
		$dbc = @mysqli_connect('localhost','root','');
		
		mysqli_select_db($dbc,'contactus');
		
		$problem = FALSE;
		if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['message'])){
			$nema = trim($_POST['name']);
			$email = trim($_POST['email']);
			$message = trim($_POST['message']);
		}
	if(!$problem){
		
			$query = "INSERT INTO contactus(entry_id, name, email, message) VALUES (0, '$name','$email','$message')";
			if(@mysqli_query($dbc, $query)){
				print'You have successfully submmitted your form to our agent!';
			}
			else{
				print	'<p style="color:red;">Could not add the entry because:<br/>'.mysqli_error($dbc).'</p><p>The query
			was:'.$query.'</p>';
			}
		
		
	mysqli_close($dbc);
		
	}
	
	
}

}
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <meta name="description" content="The best website for collage comparison in Penang">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main">
<div class="page">
<?php include ("header.php"); ?>
<div class="content">

<form action="contactus.php" method="POST">
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">

<p>Enquire About:</p>
<select name="type" size="1">
<option value="update">Education Programs</option>
<option value="colleges">Colleges</option>
<option value="Requirements">Requirements</option>
<option value="new">Other</option>
</select>
<br />

<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
<input type="hidden" name="submitted" value="true">

</form>


</div>
<?php include ("footer.php") ?>
</div>
</div>
</body>
</html>