<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
  <style type="text/css">
.back-img{
    background-image: url(login.jpg);
    width: 100%;
    height: 100%;
    background-size: cover;
    position: absolute;
}
.text{
    text-align: center;
    color: black;
    font-size: 25px;
    font-weight: bold;
    margin-top: 250px;
}
.line-1{
    width: 70%;
}
</style>
</head>
<body>
<?php require 'Logged.php' ?>
<div class="back-img">
<?php
    $dtls = file_get_contents('contact.json');
    $dtlsok = json_decode($dtls);
    foreach($dtlsok as $value)
    {
        echo "<center><hr><h3>Name: $value->name</h2>";
        echo "<h3>Email: $value->email</h2>";
        echo "<h3>Subject: $value->subject</h2>";
        echo "<h3>Phone: $value->phn</h2></hr></center>";
    }
?>

<?php require 'footer.php' ?>
</body>
</html>


<!-- if(empty($_POST["text"]))
    {
      $mesgErr = "Message is required";
    }
    else
    {
      $text = ($_POST["text"]);
    } -->