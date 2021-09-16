<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2.1</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="name"> <br>
    <input type="submit">
</form>

<?php
$name;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $validName=validateInpute($name);
    echo "Name: ";
    echo  $validName; 
}
function validateInpute($name){
$name = trim($name);
$name = stripslashes($name);
$name = htmlspecialchars($name);
return $name;
}
?>
</body>
</html>