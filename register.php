<?php

include("dbconnect.php");
$username = $_GET['USERNAME'];
$password = $_GET['PASSWORD'];
$hashed_password = sha1($password,False);
echo $hashed_password;
$login_sql = "INSERT INTO users (username,password,status) VALUES ('$username','$hashed_password',NULL)";
$login_qry = mysqli_query($heroku_db, $login_sql);


//After adding user reset id counter

$login_sql = "ALTER TABLE users AUTO_INCREMENT = 1";
$login_qry = mysqli_query($heroku_db, $login_sql);
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