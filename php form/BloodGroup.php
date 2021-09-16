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
    <legend>Blood Group</legend>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
     <select name="bg" >
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option> 
                        
     </select>
        <br>
        <hr>
        <input type="submit" value="Submit">
    </form>
</fieldset>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $Var = $_POST['bg'];
    if (empty($Var)) {
        echo "bg is empty";
    } else {
        echo $Var;
    }
}
?>

</body>
</html>