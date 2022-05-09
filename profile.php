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
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
<?php include("navbar.php"); ?>
<div class="profile_background">
<div class="profile_grid">
    <div class="profile_grid_item"><img src="me.png" alt=""></div>
    <div class="profile_grid_item">
        <h1>Hello <?php echo $username?> </h1>
        <h2>What would you like to do today?</h2></div>
    </div>
    <div class="center_text">
    <p>Hello World</p>
    

    </div>


</div></div>

</body>
</html>