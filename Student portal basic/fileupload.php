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
  <?php require'Logged.php'  ?>
  <div class="back-img">

  <?php //session_start();
  //echo "Logged in as &nbsp". $_SESSION['uname']."<br>" ?>
  <fieldset width="50%" >
                    <legend><b><h2>PROFILE PICTURE</h2></b></legend>
                    <form method="post" action="upload.php" enctype="multipart/form-data">
                      <b>Select image to upload:</b>
                        <img src="user.png" align= "left" height="120px" width="130px"  alt=""><br>
                        <input type="file" name="fileToUpload" id="fileToUpload"><br><hr>
                        <input type="submit" name="submit" value="Upload" >
                     </form>
                    
                </fieldset>
<!-- <fieldset>

  <legend>Upload Picture</legend>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <b>Select image to upload:</b>
  <input type="file" name="fileToUpload" id="fileToUpload"><br><hr>
  <input type="submit" value="Upload Image" name="submit">
</form>
</fieldset> -->
<?php require'footer.php'  ?>
</body>
</html>





