<?php

if (isset($_POST['submitted'])){ 

	$dbc = mysqli_connect('localhost','root','');
	//select the database
	mysqli_select_db($dbc,'inticollege');
	
	$query = 'SELECT * FROM inticollege';
	$r = mysqli_query($dbc, $query);
	print	'<a href=\Admin.php>Back to Homepage</a><br>';
		
		while ($row = mysqli_fetch_array($r)){
		print	"<p><h3>Product:{$row['courses']}</h3>Quantity:{$row['fees']}<br/>
			</p><hr/>\n";
		}
		
	mysqli_close($dbc);

}
?>



}

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
<form action="try.php" method="post">
<select name='college1'>
		<option>-- select a college --</option>
		<option>INTI International Penang</option>
		<option>SEGI College Penang</option>
		<option>KDU Penang University College</option>
		<option>DISTED College</option>
		<option>SENTRAL College Penang</option>
	</select>
	compare to
	<select name='college2'>
		<option>-- select a college --</option>
		<option>INTI International Penang</option>
		<option>SEGI College Penang</option>
		<option>KDU Penang University College</option>
		<option>DISTED College</option>
		<option>SENTRAL College Penang</option>
	</select>
	<input type='submit' value='Compare'>
	<input type='text' name='search' value='search'>
	<input type='hidden' name='submitted' value='true'>
	</form>
	</div>
	</body>
<!--content end-->

<!-- #footer start -->
<?php include ("footer.php") ?>
<!-- /#footer end -->
</html>