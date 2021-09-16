<?php 
    session_start();
    header('location:login.php');
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,'reg');
    $name=$_POST['uname'];
    $pass=$_POST['pass'];
    $query="select * from user where name =$name";
    $result = mysqli_query($con,$query);
    $num=mysqli_num_rows($result);
    if($num ==1){
        echo "User Name Already taken";
    }
    else{
        $reg="insert into  user(Name,Password) values ('$name','$pass')";
        mysqli_query($con,$reg);
        echo "Registration Successful.";
    }
?>