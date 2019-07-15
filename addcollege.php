<?php
session_start();
		date_default_timezone_set("Asia/Kuala_Lumpur");
		print'<font color=”#ADD8E6>Login Successfully! Welcome: '.$_SESSION['username'].'</font>';
		print '<br>you have been log in since:'.date('h:i:sa',$_SESSION['loggedin']);
		print'<br><a href="logout.php">Click here to log out</a><br>';
		?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Compare the Colleges</title>
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

<!--content start-->
<div class="content">
<form action="addcollege.php" method="post">
<?php

if(isset($_POST['submitted'])){

	$dbc = @mysqli_connect('localhost','root','');
	
	//select the database
	mysqli_select_db($dbc,'college');
		
		$problem = FALSE;
		if(!empty($_POST['collegename'])&&!empty($_POST['facilities'])&&!empty($_POST['courses'])&&!empty($_POST['numberofstudent'])&&!empty($_POST['fees'])&&!empty($_POST['userreview'])){
			$collegename = trim($_POST['collegename']);
			$facilities = trim($_POST['facilities']);
			$courses = trim($_POST['courses']);
			$numberofstudent = trim($_POST['numberofstudent']);
			$fees = trim($_POST['fees']);
			$userreview = trim($_POST['userreview']);
			$picture = trim($_POST['picture']);
		}
		else{
			print	'<p style="color:red;">Please fill in the information in every field!</p>';
			$problem = TRUE;
		}
		if(!$problem){
		
			$query = "INSERT INTO college(ID,collegename, facilities, courses, numberofstudent,fees,userreview,picture) VALUES (0, '$collegename', '$facilities','$courses','$numberofstudent','$fees','$userreview','$picture')";
			if(@mysqli_query($dbc, $query)){
				print'<p>The blog entry has been added!</p>
				<a href=compare.php>Back</a>';
				
			}
			else{
				print	'<p style="color:red;">Could not add the entry because:<br/>'.mysqli_error($dbc).'</p><p>The query
			was:'.$query.'</p>';
			}
		}
	mysqli_close($dbc);
	

}

else{
	print'
	<form action ="addcollege.php" method="post">
	<h1>New College Information</h1><br>
	<p>Entry College Name:<input type="text" name="collegename"/></p>
	<p>Entry Facilities:<input type="text" name="facilities"/></p>
	<p>Entry Courses:<input type="text" name="courses"/></p>
	<p>Entry Number of student:<input type="text" name="numberofstudent" value="example:100~200"/></p>
	<p>Entry Fees:<input type="text" name="fees"value="example:10k~20k"/></p>
	<p>Entry User review:<input type="text" name="userreview"/></p>
	<p>Entry Picture :<input type="text" name="picture" value="Enter picture URL" /></p>
	<input type="submit" name="submit" value="Post This Entry!"/>
	<input type="hidden" name="submitted" value="true"/>';
}

?>
<!--content end-->

<!-- #footer start -->
<?php include ("footer.php") ?>
<!-- /#footer end -->

</div>
</div>
</body>
</html>