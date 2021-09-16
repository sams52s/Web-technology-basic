<!DOCTYPE html>
<html lang="en">
<head>
<title>Read File</title>
<?php 
        include("Header.php")
    ?>
</head>
<body>
<div class="writefile">
<?php
$myfile = fopen("lab3.txt", "w") or die("Unable to open file!");
$txt = $_POST["txt1"]."\n";
fwrite($myfile, $txt);
$txt = $_POST["txt2"]."\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</div>
<div class="read">
 <?php
$myfile = fopen("lab3.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("lab3.txt"));
fclose($myfile);
?>
</div>
</body>
<hr>
<div class="footer">
<?php 
    include("footer.php")
?>
</div>
</html>