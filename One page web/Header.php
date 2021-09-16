<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="style.css">
<div class="head">

    <div class="btn"><a href="./Home.php">Home</a>
    <a href="./aboutUs.php">About Us</a>
    <a href="./contact.php">Contact</a>
    </div>
    <div class="date">
    <?php 
        echo "Date: ".date("Y-m-d") . "<br>";
    ?>
    </div>
    </div>
    <hr>
</body>
</html>