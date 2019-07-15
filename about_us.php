<!DOCTYPE html>
<?php
session_start();
	date_default_timezone_set("Asia/Kuala_Lumpur");
	print'<font color=”#ADD8E6>Login Successfully! Welcome: '.$_SESSION['username'].'</font>';
	print '<br>you have been log in since:'.date('h:i:sa',$_SESSION['loggedin']);
	print'<br><a href="logout.php">Click here to log out</a><br>';
			
?>
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
<h3 class="subtitle">About us</h3>
<section>
										<ul class="style">
											<li>
												<h3>COL-LEGEND Penang</h3>
												<span>COL-LEGEND is a website that help user to compare the colleges</span> 
											</li>
											<li>
												<h3>Our Mission</h3>
												<span>Our mission is to compare the college to the user and answer all the question that they are confused or misunderstand. And we also provide college details to the user.</span> 
											</li>
										</ul>
									</section>
									<section>
										<ul class="style">
											<li>
												<h3>Join us today</h3>
												<span>To get more information, register now and get more colleges informations<a href="register.php" id="join">Register now!</a></span> 
											</li>
											<li>
												<h3>Our slogan</h3>
												<span>Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.</span> 
											</li>
										</ul>
									</section>
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