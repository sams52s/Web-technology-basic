<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <style>
    *{
        background-color: rgb(135,206,235);

    }
    .Courses{
        margin-left: 5%;
        text-size-adjust: 14px;
        padding: 2%;
        color:	rgb(10%, 0%, 10%) ;
        

    }
    </style>
</head>
<body>
<a href="./Student.php">Back</a>
<?php require 'Logged.php'?>
<div class="Courses">

<?php

$myfile = fopen("Courses.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo "  ". fgets($myfile) . "<br>";
}
fclose($myfile);

?>
</div><br><br>
    
    <br><br>
</body>
 <?php require 'footer.php'  ?>
</html>
