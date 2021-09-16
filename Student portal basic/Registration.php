<!DOCTYPE html>
<html>
<head>
  <style>
.error {color: #FF0000;}
</style>
  <title>Registration</title>
</head>
<body>

  <?php
  $nameErr = $emailErr = $unameErr = $passErr = $cpassErr = $genderErr = $dobErr = $msgErr = "";
  $name = $email = $uname = $password = $cpassword = $gender = $dateofbirth = $message = $error= ""; 
 
  if (isset($_POST["submit"])) 
  {
    if (empty($_POST["name"])) 
    {
      $nameErr = "Name is required";
    }
    else 
    { $name = $_POST["name"];

     if (strlen($_POST["name"])<2) 
      {
      $nameErr = "Name should not be less than 2 characters";
      }
      else if (!preg_match("/^[a-zA-Z-'. ]*$/",$name)) 
      {
        $nameErr = "Only letter and white spaces are allowed";
      }
    }

    if(empty($_POST["email"]))
    {
      $emailErr = "Email is required";
    }
    else
    {
      $email = $_POST["email"];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
      {
      $emailErr = "Invalid email format";
      }
    }

    if (empty($_POST["uname"])) 
    {
      $unameErr = "User Name is required";
    }
    else 
    { $uname = $_POST["uname"];

     if (strlen($_POST["uname"])<2) 
      {
      $unameErr = "User Name should not be less than 2 characters";
      }
    }

    if (empty($_POST["password"]))
    {
      $passErr = "Password is required";
    }
    else
    {
      $password = $_POST["password"];
      if (strlen($_POST["password"])<8) 
      {
        $passErr = "Password must contain atleast eight characters";
      }
    }

    if (empty($_POST["cpassword"]))
    {
      $cpassErr = "Confirm password is required";
    }
    else
    {
      if ($_POST["password"] != $_POST["cpassword"]) 
      {
        $cpassErr = "Password didn't match";
      }
      else if($_POST["password"] = $_POST["cpassword"])
        {$cpassErr ="Password set successfully";}
    }

    if (empty($_POST["gender"])) 
    {
      $genderErr = "Select a gender";
    }
    else
    {
      $gender = ($_POST["gender"]);
    }

    if (empty($_POST["dateofbirth"]))
     {
      $dobErr = "Date of Birth required";
     }
      else 
        {
          $dateofbirth = date('d-m-Y', strtotime($_REQUEST['dateofbirth']));
        }

      if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'], 
                      'email'               =>     $_POST['email'],
                      'uname'               =>     $_POST['uname'],
                      'password'               =>     $_POST['password'],
                       'gender'         => $_POST['gender'], 
                      'dateofbirth'     =>     $_POST['dateofbirth']  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "File inserted Successfully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  




  }

  ?>

   <?php require'Welcome.php' ?>
  <fieldset width="50%" style="background-color: LightBlue;">
    <legend><h2>REGISTRATION</h2></legend>

    <form method="POST">

      <?php 
    
   if (isset($error)) 
   {
      echo $error;
   }
   ?> <br>

      <b>Name: &nbsp &nbsp &nbsp &nbsp &nbsp      </b> <input type="text" name="name">  <span class="error">* <?php echo $nameErr;?></span>
                                                  <br><hr>
      <b>Email: &nbsp &nbsp &nbsp  &nbsp &nbsp    </b> <input type="text" name="email"> <span class="error">* <?php echo $emailErr;?></span>  <br><hr>
      <b>User Name: &nbsp                         </b> <input type="text" name="uname"> <span class="error">* <?php echo $unameErr;?></span> <br><hr>
      <b>Password: &nbsp &nbsp                    </b> <input type="password" name="password"> <span class="error">* <?php echo $passErr;?></span> <br><hr>
      <b>Confirm Password: &nbsp                  </b> <input type="password" name="cpassword"> <span class="error">* <?php echo $cpassErr;?></span>  <br><hr>
      <b>Gender: &nbsp &nbsp  &nbsp &nbsp         </b> <input type="radio" name="gender" value="Male">Male 
                                                       <input type="radio" name="gender" value="Female">Female
                                                       <input type="radio" name="gender" value="Other">Other
                                                       <span class="error">* <?php echo $genderErr;?></span>
                                                       <br><hr> 

      <b>Date Of Birth: </b>                           <input type="date" name="dateofbirth"> <span class="error">* <?php echo $dobErr;?></span> <br><hr>
                                                       <input type="submit" name="submit" value="submit">
                                                       <input type="reset" name="reset" value="reset">

      <?php
   
   if (isset($message)) {
       echo $message;
   }

    ?>                                                 
    </form>
  </fieldset>
  <?php require'footer.php' ?>

