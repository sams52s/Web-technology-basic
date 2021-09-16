<?php 
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <center><h1>Home Page</h1></center>
    <h3>Welcome <?php echo $_SESSION['Name'];?></h3>
    <a href="./Logout.php">Log Out</a>
</body>
</html>