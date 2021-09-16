<!DOCTYPE html>
<html>
<head>
	<title>Password Matching</title>
	 <style type="text/css">
.back-img{
    background-image: url(login.jpg);
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


<?php
//session_start();

if (isset($_POST['submit'])) {

$cpassword = $_POST['cpassword'];
$npassword = $_POST['npassword'];
$rpassword = $_POST['rpassword'];

if ($cpassword == $npassword) {
	echo "New password should not be matched with the current password";
}
else
{
	if ($npassword != $rpassword) 
	{
		echo "New and retype password must be same";
	}
	else{echo "Password set successfully";}
	
}

}


?>
<?php require'Logged.php' ?>
<div class="back-img">
<?php //echo "Logged in as &nbsp".$_SESSION['uname']."<br>"."<br>" ?>
<fieldset width="50%" >

	<legend><h2>CHANGE PASSWORD</h2></legend>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Current Password: <input type="Password" name="cpassword">
    <br><br>
 
    New Password: <input type="Password" name="npassword">
    <br><br>

    Retype New Password: <input type="Password" name="rpassword">
    <hr>
    <input type="Submit" name="submit">

    </form>

</fieldset>
<?php require'footer.php' ?>


</body>
</html>