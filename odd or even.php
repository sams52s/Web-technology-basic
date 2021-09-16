<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd or even</title>
</head>
<body>
<?php 
$Value="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $Value = $_POST["Value"];
     if($Value%2)
     { 
         
         echo "This is a odd number";
     }
     else{
         echo "This is a even number";
     }
}
 ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
        Value: <input type="text" name="Value" value="<?php echo $Value;?>">
         <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
    <?php
echo "<h2>Your Input:</h2>";
echo $Value;

?>
</body>
</html>