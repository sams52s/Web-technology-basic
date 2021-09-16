<!DOCTYPE html>
<html>
<head>
	<title>Password Matching</title>
</head>
<body>


<?php


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
<?php require'Welcome.php' ?>

<fieldset>

	<legend>CHANGE PASSWORD</legend>

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