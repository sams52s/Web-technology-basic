<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
</head>
<body>
    <!-- start for Sample Form -->
    <div>
      <form action="" method="get">
        <fieldset>
          <legend>
            <h1>Registration From</h1>
          </legend>
          <label for="fname">First name:</label>
          <input type="text" id="fname" name="fname" required="" /><br />
          <hr />
          <label for="lname">Last name:</label>
          <input type="text" id="lname" name="lname" required="" /><br />
          <hr />
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required="" /><br />
          <hr />
          <fieldset>
            <legend>
              <h1>Gender</h1>
            </legend>
            <input type="radio" id="male" name="gender" value="male" />
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" />
            <label for="female">Female</label>
          </fieldset>
          <hr />
          <fieldset>
            <legend>
              <h1>Birthday:</h1>
            </legend>
            <input type="date" id="birthday" name="birthday" /> <br />
          </fieldset>
          <hr />
          <input type="submit" value="Submit" /> <input type="reset" />
        </fieldset>
      </form>
    </div>
 <!--   <div>
      <fieldset>
        <legend>
          <h1>Login Form</h1>
        </legend>
        <label for="Uname">User name:</label>
        <input type="text" id="uname" name="uname" required="" /><br />
        <label for="Password">Password</label>
        <input type="password" id="Password" /> <br />
        <hr />
        <input type="checkbox" id="Remember" name="Remember" value="remember" />
        Remember me <br />
        <input type="submit" value="Submit" />
        <a href="#">Forget password?</a>
      </fieldset>
    </div>
    <div>
      <fieldset>
        <legend>
          <h1>Change Password</h1>
        </legend>
        <label for="CPassword">Current Password</label>
        <input type="password" id="Password" /> <br />
        <label for="nPassword">New Password</label>
        <input type="password" id="Password" /> <br />
        <label for="RetypeNewPassword" style="color: red"
          >Retype New Password:</label
        >
        <input type="password" id="Password" /> <br />
        <hr />
        <input type="submit" value="Submit" />
      </fieldset>
    </div>
    <!-- end for Sample Form -->
  </body>
</html>