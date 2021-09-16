<!DOCTYPE html>
<html lang="en">
<head>
<title>Write File</title>
<?php 
        include("Header.php")
    ?>
</head>
<body>
<fieldset>
<legend>Write file</legend>
<div class="write file">
<form action="readfile.php" method="post">
Text here: <input type="text" name="txt1"> <br>
Another Text here: <input type="text" name="txt2"> <br>
<input type="submit" value="submit">
</form>
</div>
</fieldset>

    
</body>
<div class="footer">
<?php 
    include("footer.php")
?>
</div>
</html>