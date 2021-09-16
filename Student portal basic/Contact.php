<!DOCTYPE html>
<html>
<head>
	<style>
    .error {color: #FF0000;}
    </style>
  	<meta charset="utf-8">
	<title>Contact</title>
</head>
<body>
	<?php
  $nameErr = $emailErr = $subErr = $conErr = $msgErr = "" ;
  $name = $email = $subject = $phn = $message = $error= ""; 
 
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
    if(empty($_POST["subject"]))
    {
      $subErr = "Subject is required";
    }
    else
    {
      $subject = ($_POST["subject"]);
    }
     if(empty($_POST["phn"]))
    {
      $conErr = "Contact number is required";
    }
    else
    {
      $phn = ($_POST["phn"]);
    }

	
    if(file_exists('contact.json'))  
           {  
                $current_data = file_get_contents('contact.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                      'name'               =>     $_POST['name'], 
                      'email'               =>     $_POST['email'],
                      'subject'               =>     $_POST['subject'], 
                      'phn'            => $_POST['phn'], 
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('contact.json', $final_data))  
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
		<legend><h2>Contact Form</h2></legend>
		    <form method="POST">
		    	  <?php 
    
   if (isset($error)) 
   {
      echo $error;
   }
   ?>
	<input type="text" name="name" placeholder="Full Name"><span class="error">* <?php echo $nameErr;?></span><br><hr>
	<input type="text" name="email" placeholder="Your E-Mail"><span class="error">* <?php echo $emailErr;?></span><br><hr>
	<input type="text" name="subject" placeholder="Subject"><span class="error">* <?php echo $subErr;?></span><br><hr>
	<input type="text" name="phn" placeholder="Contact Number"><span class="error">* <?php echo $conErr;?></span><br><hr>
    <input type="submit" name="submit" value="submit">
    <?php
   
   if (isset($message)) {
       echo $message;
   }

    ?>  
</form>
</fieldset>

	<?php require'footer.php' ?>

</body>
</html>