<?php

SESSION_START();

unset($_SESSION);

session_destroy();

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

<p>Log out successfully !<p/>
<a href="login.php">Back</a>

</div>


</div>
</div>
</body>
</html>