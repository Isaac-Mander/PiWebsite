<?php
include("dbconnect.php");
session_start();
if (isset($_GET['newstatus']))
{
    $username = $_SESSION['USERNAME'];
    $new_status = $_GET['newstatus'];
    $sql_query = "UPDATE users SET status='$new_status' WHERE username='$username'";
    mysqli_query($heroku_db, $sql_query);
    header('Location: profile.php');
}



?>