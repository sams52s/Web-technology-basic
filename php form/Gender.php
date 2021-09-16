<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>Gender</legend>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br><hr>
  <input type="submit" name="submit" value="Submit">  
        </form>
    </fieldset>

</body>
<?php

 $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $gender = ($_POST["gender"]);
}
echo $gender;
?>


</html>