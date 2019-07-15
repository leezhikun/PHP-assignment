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
  <title>COL-LEGEND</title>
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
<div class="left-panel">
<div class="left-panel-in">
<h2 class="title">WELCOME TO COL-LEGEND</h2>
<p>&nbsp;</p>
<p>We are COL-LEGEND. The best collage comparison in Penang. We are here to help you compare which college in Penang is more suitable for you! Kindly sign up and receive our newest info by today &#128515; We had choose Top 5 colleges in Penang at the below list: </p>
<ul class="list1">
  <li>* INTI International College Penang</li>
  <li>* SEGI College Penang</li>
  <li>* KDU University College Penang</li>
  <li>* Disted College Penang</li>
  <li>* The One Academy Penang</li>
</ul>

<img src="images/inti.jpg" alt=" " width= "300" height="200">
<p>Address: 1-Z, Lebuh Bukit Jambul,11900 Penang <br> Website: <a href="https://newinti.edu.my/campuses/inti-international-college-penang/">https://newinti.edu.my/campuses/inti-international-college-penang/</a> 
<br> Phone number: 04-6310138 <br> </p> <br>

<img src="images/segi.png" alt=" " width= "350" height="200">
<p>Address: Wisma Greenhall, 43, Green Hall, 10200 Penang <br> Website: <a href="https://www.segi.edu.my/penang/">https://www.segi.edu.my/penang/</a> 
<br> Phone number: 04-2633888 </p> <br><br>

<img src="images/kdu.png" alt=" " width= "300" height="200">
<p>Address: 32, Jalan Anson, 10400 Penang <br> Website: <a href="http://www.kdupg.edu.my/">http://kdupg.edu.my/</a> 
<br> Phone number: 04-2386368 </p> <br><br>

<img src="images/disted.jpg" alt=" " width= "300" height="250">
<p>Address: 340, Macalister Road, 10350 Penang <br> Website: <a href="https://www.disted.edu.my/">http://www.disted.edu.my/</a> 
<br> Phone number: 04-2296579 </p> <br><br>

<img src="images/toc.png" alt=" " width= "300" height="250">
<p>Address: 33 Jalan Anson, 10400 Penang <br> Website: <a href="http://www.toa.edu.my/">http://www.toa.edu.my/</a> 
<br> Phone number: 04-2103000 </p> <br><br>

</div>
</div>
<!--Designed by--><a href="http://www.htmltemplates.net">
<img src="images/copyright.gif" class="copyright" alt="http://www.htmltemplates.net"></a>
<div class="right-panel">
<div class="right-row1">
<h3 class="subtitle">Latest News</h3>
<p>&nbsp;</p>
<p class="green"><img src="images/right-bullet.jpg" alt="" height="8" width="17">PTPTN Application Is Open NOW!!!</p>
<p><strong> Students are welcome to apply PTPTn from today!</strong> For more information please click the link here: <a href="http://www.kdupg.edu.my/">http://www.ptptn.gov.my/</a></p>
<p>&nbsp;</p>
<p class="green"><img src="images/right-bullet.jpg" alt="" height="8" width="17">SPM Result Doesn't Mean Everything</p>
<p><strong>Your exam results do not define you as a person and/or predict your future</strong> Kindly contact BeFrienders if you think you have any problems but no one can tell :603-79571306. <a href = "mailto:admin@befrienders.org.my">admin@befrienders.org.my</a> </p>
<p>&nbsp;</p>
<p class="green"><img src="images/right-bullet.jpg" alt="" height="8" width="17">Quotes Of The Day</p>
<p><strong>Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.</strong>
<p>&nbsp;</p>
<h3 class="subtitle">Contact Info</h3>
<p>&nbsp;</p>
</div>
<div class="right-row2">
<p>COL_LEGEND</p>
<p>E-mail:<a href = "mailto:admin@befrienders.org.my"> admin@col-legend.com</a></p>
<p>Fax:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 123-456-758</p>
<p>Phone: 04-2828366 /<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;842-268-795</p>
</div>
</div>
</div>
<!--content end-->

<!-- #footer start -->
<?php include ("footer.php") ?>
<!-- /#footer end -->

</div>
</div>
</body></html>