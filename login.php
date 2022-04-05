<?php
if(isset($_GET['error']))
{
    if ($_GET['error'] == "1")
    {
        $error_msg = "Login Info Incorrect";
    }
}
else $error_msg = "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
<?php include("navbar.php"); ?>

<div class="container">
  <div class="split">
    <div>
      <h3>Login</h3>
    <form action="login_check.php">
    <label for="USERNAME">Username:</label><br>
    <input type="text" id="USERNAME" name="USERNAME" value=""><br>
    <label for="PASSWORD">Password:</label><br>
    <input type="text" id="PASSWORD" name="PASSWORD" value=""><br><br>
    <input type="submit" value="Submit">
    </form>
    <h1><?php echo $error_msg ?></h1>
    </div>

    <div>
      <h3>Register</h3>
    <form action="register.php">
    <label for="USERNAME">Username:</label><br>
    <input type="text" id="USERNAME" name="USERNAME" value=""><br>
    <label for="PASSWORD">Password:</label><br>
    <input type="text" id="PASSWORD" name="PASSWORD" value=""><br><br>
    <input type="submit" value="Submit">
    </form> 
    </div>


  </div>


  </div>

</body>
</html>