<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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
	<?php require 'Logged.php';  ?>
<div class="back-img">
<?php 

$textarea = "";
if (isset($_POST['Post']))
 {
	$textarea = $_POST['textarea'];
}
?>

<fieldset>
	<legend>Write Your Post</legend>
	<form method="POST">
     <textarea  placeholder="Write here..." name="textarea" rows="15" cols="50"> </textarea> </br><hr>
     <input type="submit" name="Post" value="Post">
     <input type="reset" name="Reset" value="Reset">

</form>
</fieldset>
<fieldset>
	<?php
echo "<h2>Your Post:</h2>";
echo $textarea;


?>
</fieldset>

<?php require'footer.php' ?>

</body>
</html>