<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>

    <fieldset><legend>Add PRODUCT</legend>
    <form action="../controller/add.php" method="POST">
        Name: <br>
        <input type="text" name="Name"> <br>
        Buying Price: <br>
        <input type="text" name="Buying_Price" id="Buying_Price"><br>
        Selling Price: <br>
        <input type="text" name="Selling_Price" id="Selling_Price">
        <br><hr>
        <input type="checkbox" name="display" id="display">Display
        <br><hr>
        <button type="submit">SAVE</button>
    </form>
    </fieldset>

</body>
</html>