<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
    <style>
.error {color: #FF0000;}
</style>
</head>
<body>
    <?php
$fnameErr = $lnameErr ="";
$fname =$lname="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
    } else {
    $fname = validateInpute($_POST["fname"]);
    }
    if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
    } else {
    $lname = validateInpute($_POST["lname"]);
    }
}
function validateInpute($name){
$name = trim($name);
$name = stripslashes($name);
$name = htmlspecialchars($name);
return $name;
}
?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    First Name: <input type="text" name="fname" ><span class="error">* <?php echo $fnameErr;?></span>
  <br>
    Last Name: <input type="text" name="lname" ><span class="error">* <?php echo $lnameErr;?></span>
  <br>
    <input type="submit">
</form>


<?php

echo "<h3>Here is the Input details:</h3>";
    echo "First Name: ";
    echo  $fname; 
    echo "<br> Last Name: ";
    echo  $lname;
?>
</body>
</html>