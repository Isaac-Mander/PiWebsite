<?php

include("dbconnect.php");
$username = $_GET['USERNAME'];
$password = $_GET['PASSWORD'];
$hashed_password = sha1($password,False);
echo $hashed_password;
$register_sql = "INSERT INTO users (username,password,status) VALUES ('$username','$hashed_password',NULL);";
$register_qry = mysqli_query($heroku_db, $register_sql);

//If password correct start session
session_start();
//Set session var
$_SESSION['USERNAME'] = $username;
$_SESSION['PASSWORD'] = $password;

header('location: profile.php');




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Registering you, please wait to be redirected</h1>
</body>
</html>