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
.content{

    padding: 2%;
    background-color:rgb(135,206,235);
    width: 100%;
    height: 33rem;
}
</style>
</head>
<body>
	<?php require 'Logged.php';?>
    
<div class="content">

<center>
    <h1> Student profile:</h1>

    <?php 
    $dtls = file_get_contents('data.json');
    $dtlsok = json_decode($dtls);
    foreach($dtlsok as $value)
    {
        if($value->uname=="Ifath"){   
            echo "<hr><h3>Name: </><td>$value->name</h2>";
            echo "<h3>Email: $value->email</h2>";
            echo "<h3>Username: $value->uname</h2>";
            echo "<h3>Password: $value->password</h2>";
            echo "<h3>Gender: $value->gender</h2>";
            echo "<h3>DOB: $value->dateofbirth</h2></hr>";
        }
    }
    ?>
</center>
<a href="./Courses.php">Show Courses</a>
<?php 
if (isset($_SESSION['uname'])) {
	//echo "<h1> Welcome ".$_SESSION['uname']."</h2>";
	echo "<h3><br><li><a href='Community.php'>Your Community</a><br>";
	echo "<li><a href='fileupload.php'>Upload Picture</a><br>";
	echo "<li><a href='Forgot.php'>Reset Password</a><br>";
	//echo "<br><a href='logout.php'>Logout</a><br>";
}
?>
</div>
<div >
 <?php require'footer.php'  ?>

</body>
</html>