<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>

<body>
<fieldset>
    <legend>Name</legend>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="name"><br>
        <hr>
        <input type="submit" value="Submit">
    </form>
</fieldset>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $Var = $_POST['name'];
    if (empty($Var)) {
        echo "Name is empty";
    } else {
        echo $Var;
    }
}
?>

</body>

</html>