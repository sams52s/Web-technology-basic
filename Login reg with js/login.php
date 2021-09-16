<?php 
    session_start();
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'reg');
    $name=$_POST['uname'];
    $pass=$_POST['pass'];
    $query="select * from user where name ='$name' && password ='$pass'";
    $result = mysqli_query($con,$query);
    $num=mysqli_num_rows($result);
    if($num ==1){
        $_SESSION['Name']=$name;
        header('location:Home.php');
    }
    else{
        header('location:login.php');
    }

?>