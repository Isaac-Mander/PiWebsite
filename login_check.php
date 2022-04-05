<?php


include("dbconnect.php");
$username = $_GET['USERNAME'];
$password = $_GET['PASSWORD'];
$login_sql = "SELECT password FROM users WHERE username = '$username'";
$login_qry = mysqli_query($heroku_db, $login_sql);
$login_results = mysqli_fetch_assoc($login_qry);

//Convert Inputed password to hashed form
$hashed_password = sha1($password,False);

if($hashed_password == $login_results['password'])
{
    //If password correct start session
    session_start();
    //Set session var
    $_SESSION['USERNAME'] = $username;
    $_SESSION['PASSWORD'] = $password;
    header("Location: profile.php?");
}
else
{
    header("Location: login.php?error=1");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Check</title>
</head>
<body>
    <h1>Logging you in please wait</h1>
</body>
</html>