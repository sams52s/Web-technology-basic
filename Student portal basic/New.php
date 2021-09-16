<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
.back-img{
	background-image: url(dash.png);
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
</head>
<body>
	<?php require'Logged.php'?>
<div class="back-img">
	<?php 

		echo $_COOKIE['username'];
			
if (isset($_SESSION['uname'])) {
	//echo "<h1> Welcome ".$_SESSION['uname']."</h2>";
	echo "<h3><br><li><a href='View.php'>View Profile</a><br>";
	echo "<li><a href='Community.php'>Your Community</a><br>";
	echo "<li><a href='contactview.php'>View Contact Profile</a><br>";
	echo "<li><a href='fileupload.php'>Upload Picture</a><br>";
	echo "<li><a href='Forgot.php'>Reset Password</a><br>";
	//echo "<br><a href='logout.php'>Logout</a><br>";
}

else{
		$msg="error";
		
		if(count($_COOKIE) > 0){
			echo $_SESSION['username'];
			
		}else{
			
			header("location:login.php");
		}

		// header("location:login.php");

	}
 ?>
 <?php require'footer.php'  ?>

</body>
</html>


<!-- echo $_COOKIE['username'];
 -->

	<!-- if(count($_COOKIE) > 0){
			
			echo "cookies enable";
		}else{
			
			header("location:login.php");
		} -->