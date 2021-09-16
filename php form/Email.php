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
    <legend>Email</legend>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="email"><br>
        <hr>
        <input type="submit" value="Submit">
    </form>
</fieldset>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $Var = $_POST['email'];
    if (empty($Var)) {
        echo "Email is empty";
    } else {
        echo $Var;
    }
}
?>

</body>

</html>