<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
.back-img{
	background-image: url(aiub.jpg);
	width: 100%;
	height: 100%;
	background-size: cover;
	position: absolute;
}
.text{
	text-align: center;
	color: black;
	font-size: 25px;
	font-weight: bold;
	margin-top: 250px;
}
.line-1{
	width: 70%;
}
</style>
	<title>Home Page</title>
</head>
<body>


	<?php require'Welcome.php'?>

	<div class="back-img">
  <div class="text">
  	<hr class="line-1">
    <h2>Welcome To</h2>
    <p><h3>Alumni Management System</h3></p>
    <hr class="line-1">

	 </div>
    	
 <?php require'footer.php' ?>
  
</body>
</html>
