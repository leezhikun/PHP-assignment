
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
  <title>About Us</title>
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
<h3 class="subtitle" style="color:MediumSeaGreen; font-family:Broadway; font-size:400%; text-align:center;">About us</h3>
	<div class="left-bordered">
	<section>
		<h2 style="color:#006400; font-family:Berlin Sans FB;">COL-LEGEND Penang</h2>
		<span>COL-LEGEND is a website that help user to compare the colleges.</span><br><br><br>
											
		<h2 style="color:#006400; font-family:Berlin Sans FB;">Our Mission</h2>
		<span>Our mission is to compare the college to the user and answer all the question that they are confused or misunderstand. And we also provide college details to the user.</span> 
	</section>
	</div>
	
	<div class="right-bordered">
	<section>
		<h2 style="color:#006400; font-family:Berlin Sans FB;">Join us today</h2>
		<span>To get more information, register now and get more colleges information.<br><a href="register.php" id="join">Register now!</a></span> <br><br><br>
											
		<h2 style="color:#006400; font-family:Berlin Sans FB;">Our slogan</h2>
		<span>Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.</span> 
	</section>
	</div>
	
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>
<!--content end-->

<!-- #footer start -->
<?php include ("footer.php") ?>
<!-- /#footer end -->

</div>
</div>
</body>
</html>