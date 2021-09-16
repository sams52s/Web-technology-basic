<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
    <style>
.error,
.output {color: #FF0000;}
</style>
</head>
<body>
    <?php
$emailErr =$fnameErr = $lnameErr =$GenderErr="";
$fname =$lname=$email=$Website= $Comment= $Gender="";
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
    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    } else {
    $email = validateInpute($_POST["email"]);
    }
    if (empty($_POST["Gender"])) {
    $GenderErr = "Gender is required";
    } else {
    $Gender =($_POST["Gender"]);
    }
    $Website = $_POST["Website"];
    $Comment = $_POST["Comment"];

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
    Last Name: <input type="text" name="lname" > <span class="error">* <?php echo $lnameErr;?></span>
    <br>
    Email: <input type="text" name="email" ><span class="error">* <?php echo $emailErr;?></span>
    <br>
    Website: <input type="text" name="Website" >
    <br>
    Comment: <textarea name="Comment" id="Comment" cols="30" rows="10"></textarea>
    <br>
    Gender:   <input type="radio" name="Gender" value="male"> Male 
    <input type="radio" name="Gender" value="female"> Female 
    <input type="radio" name="Gender" value="other"> Other  <span class="error">* <?php echo $GenderErr;?></span>
    <br>
    <input type="submit">
</form>

<div class="output">
<?php
echo "<h3>Here is the Input details:</h3>";
    echo "First Name: ";
    echo  $fname; 
    echo "<br> Last Name: ";
    echo  $lname;
    echo "<br> Email: ";
    echo  $email;
    echo "<br> Website: ";
    echo $Website;
    echo "<br> Comment: ";
    echo $Comment;
    echo "<br> Gender: ";
    echo $Gender;
?>
</div>

</body>
</html>