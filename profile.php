<?php
session_start();
include("dbconnect.php");
$username = $_SESSION['USERNAME'];
$login_sql = "SELECT password FROM users WHERE username = '$username'";
$login_qry = mysqli_query($heroku_db, $login_sql);
$login_results = mysqli_fetch_assoc($login_qry);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <?php echo $username ?>
</body>
</html>