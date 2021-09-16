<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php 

session_start();


$username="Faculty";
$password="Faculty";
$username="Student";
$password="Student";
setcookie("username", "Faculty", time() +10);
setcookie("password", "Faculty", time() +10);

if (isset($_POST['Login'])) 
   {
    if ($_POST['uname']==$username && $_POST['pass']==$password) {
        $_SESSION['uname'] = $username;
        $_SESSION['pass'] = $password;
        if($_POST['uname']=="Student")
        {
            header('location: Student.php');
        }
        else{
            header('location: new.php');
        }
    }
    else
    {
       echo "invalid user...";
    }
    

}

?>
        <?php if(isset($msg)){?>
            <?php echo $msg;?>
        <?php } ?>
  <?php require'Welcome.php' ?>
 
<fieldset width="50%" style="background-color: LightBlue;">
    <legend><h2>LOGIN</h2></legend>
    
    <table align="center" width = "50%">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        

        
           <b> Username: &nbsp </b><input type="text" name="uname"> <br><hr>

           <b> Password: &nbsp </b> <input type="Password" name="pass"> <br><hr>
           <b> <input type="checkbox" name="remember" /> Remember me <br> <hr>

                                    <input type="submit" name="Login" value="Login"> &nbsp
                                    <input type="reset" name="reset"> &nbsp &nbsp <a href="Forgot1.php"><b>Forgot Password? </b></a>
                                </table>

    
</form>
</fieldset>
<?php require'footer.php' ?>
</body>
</html>