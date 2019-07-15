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
<form action="compare.php" method="post">
<?php

	if (!isset($_POST['submitted'])){ 
		echo"
	<select name='college1'>
		<option>-- select a college --</option>
		<option value='inticollege'>INTI International Penang</option>
		<option value='segicollege'>SEGI College Penang</option>
		<option value='kducollege'>KDU Penang University College</option>
		<option value='distedcollege'>DISTED College</option>
		<option value='sentralcollege'>SENTRAL College Penang</option>
	</select>
	compare to
	<select name='college2'>
		<option>-- select a college --</option>
		<option value='inticollege'>INTI International Penang</option>
		<option value='segicollege'>SEGI College Penang</option>
		<option value='kducollege'>KDU Penang University College</option>
		<option value='distedcollege'>DISTED College</option>
		<option value='sentralcollege'>SENTRAL College Penang</option>
	</select>
	<input type='submit' value='Compare'>
	<input type='text' name='search' value='search'><br>
	<a href='addcollege.php'>+Add College</a>
	<input type='hidden' name='submitted' value='true'>";
	}
	else {
		$college1=$_POST['college1'];
		$college2=$_POST['college2'];
		$search=$_POST['search'];
		
		
		if(!isset($college1)||!isset($college2)) {
			echo '<p>Please select a college from the select box.</p>';
		}
		else {
			$dbc = mysqli_connect('localhost','root','');
			//select the database
			mysqli_select_db($dbc,'college');
			$query = "SELECT * FROM college WHERE collegename in ('$college1')";
			$r = mysqli_query($dbc, $query);
			
			$row = mysqli_fetch_array($r);
			
			$query2 = "SELECT * FROM college WHERE collegename in ('$college2')";
			$r2 = mysqli_query($dbc, $query2);
			
			$row2 = mysqli_fetch_array($r2);
			
			if(isset($_POST['submitted'])){
				if(strtolower($search)=="facilities"){
					echo '<p>You have compared: <strong>',$college1,'</strong>',' and ','<strong>',$college2,'</strong>.</p>
					<table>
					<tr>
					<th>Aspect</th>
					<th>',$college1,'</th>
					<th>',$college2,'</th>
					</tr>
					<tr>
					<td><strong>Image:</strong></td>
					<td><img src="',$row['picture'],'" alt="Smiley face" height="200" width="200"></td>
					<td><img src="',$row2['picture'],'" alt="Smiley face" height="200" width="200"></td>
					</tr>
					<tr>
					<td><strong>Facilities:</strong></td>
					<td>',$row['facilities'],'</td>
					<td>',$row2['facilities'],'</td>
					</tr>
					</table>';
				}
				elseif(strtolower($search)=="courses"){
					echo '<p>You have compared: <strong>',$college1,'</strong>',' and ','<strong>',$college2,'</strong>.</p>
					<table>
					<tr>
					<th>Aspect</th>
					<th>',$college1,'</th>
					<th>',$college2,'</th>
					</tr>
					<tr>
					<td><strong>Image:</strong></td>
					<td><img src="',$row['picture'],'" alt="Smiley face" height="200" width="200"></td>
					<td><img src="',$row2['picture'],'" alt="Smiley face" height="200" width="200"></td>
					</tr>
					<tr>
					<td><strong>Courses:</strong></td>
					<td>',$row['courses'],'</td>
					<td>',$row2['courses'],'</td>
					</tr>
					</table>';
				}
				elseif(strtolower($search)=="number of student"){
					echo '<p>You have compared: <strong>',$college1,'</strong>',' and ','<strong>',$college2,'</strong>.</p>
					<table>
					<tr>
					<th>Aspect</th>
					<th>',$college1,'</th>
					<th>',$college2,'</th>
					</tr>
					<tr>
					<td><strong>Image:</strong></td>
					<td><img src="',$row['picture'],'" alt="Smiley face" height="200" width="200"></td>
					<td><img src="',$row2['picture'],'" alt="Smiley face" height="200" width="200"></td>
					</tr>
					<tr>
					<td><strong>Number Of Student:</strong></td>
					<td>',$row['numberofstudent'],'</td>
					<td>',$row2['numberofstudent'],'</td>
					</tr>
					</table>';
				}
				else{

			
			echo '<p>You have compared: <strong>',$college1,'</strong>',' and ','<strong>',$college2,'</strong>.</p>
			
	<table>
  <tr>
    <th>Aspect</th>
    <th>',$college1,'</th>
    <th>',$college2,'</th>
  </tr>
  <tr>
	<td><strong>Image:</strong></td>
	<td><img src="',$row['picture'],'" alt="Smiley face" height="200" width="200"></td>
	<td><img src="',$row2['picture'],'" alt="Smiley face" height="200" width="200"></td>
  </tr>
  <tr>
    <td><strong>Facilities:</strong></td>
    <td>',$row['facilities'],'</td>
    <td>',$row2['facilities'],'</td>
  </tr>
  <tr>
    <td><strong>Courses:</strong></td>
    <td>',$row['courses'],'</td>
    <td>',$row2['courses'],'</td>
  </tr>
  <tr>
    <td><strong>Number Of Student:</strong></td>
    <td>',$row['numberofstudent'],'</td>
    <td>',$row2['numberofstudent'],'</td>
  </tr>
  <tr>
    <td><strong>Fees:</strong></td>
    <td>',$row['fees'],'</td>
    <td>',$row2['fees'],'</td>
  </tr>
  <tr>
    <td><strong>Review From User:</strong></td>
    <td>',$row['userreview'],'</td>
    <td>',$row2['userreview'],'</td>
  </tr>
  <tr>
	<td><strong> Rate for this compare</strong</td>
	<td><form>
    <label class="radio-inline">
      <input type="radio" name="optradio" checked>BEST!
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">SOSO
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">NAH
	  <input type="submit" name="rate" value="rate now!">
    </label>
  </form>
  
</table>';
				}
				}
}
}

?>
</div>
<!--content end-->

<!-- #footer start -->
<?php include ("footer.php") ?>
<!-- /#footer end -->

</div>
</div>
</body>
</html>