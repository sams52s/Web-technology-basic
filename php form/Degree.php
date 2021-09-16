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
        <legend>Degree</legend>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="checkbox" name="Degree" value="SSC">SSC
        <input type="checkbox" name="Degree" value="HSC">HSC
        <input type="checkbox" name="Degree" value="BSC">BSc
        <input type="checkbox" name="Degree"value="MSC">MSc
        <br>
        <hr>
        <input type="submit" value="Submit">
        </form>
    </fieldset>
</body>
 <?php
if (isset($_POST['Degree'])){
echo $_POST['Degree']; // Displays value of checked checkbox.
}
?>

</html>