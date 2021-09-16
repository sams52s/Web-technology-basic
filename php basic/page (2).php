<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1.2</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    First Name: <input type="text" name="fname"> <br>
    Last Name: <input type="text" name="lname"> <br>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    echo "First Name: ";
    echo  $fname; 
    echo "<br> Last Name: ";
    echo  $lname;
}
?>
</body>
</html>