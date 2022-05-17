<?php
session_start();
include("dbconnect.php");
$username = $_SESSION['USERNAME'];
$login_sql = "SELECT password,status FROM users WHERE username = '$username'";
$login_qry = mysqli_query($heroku_db, $login_sql);
$login_results = mysqli_fetch_assoc($login_qry);


//Get Friend Data
$friend_sql = "SELECT username_target FROM user_friends WHERE username_origin = '$username'";
$friend_qry = mysqli_query($heroku_db,$friend_sql);
$friend_results = mysqli_fetch_assoc($friend_qry);

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
    <div class="profile_grid_item"><img src="icon_img/me.png" alt=""></div>
    <div class="profile_grid_item">
        <h1>Hello <?php echo $username?> </h1>
        <h2>What would you like to do today?</h2>
        <h3>Status: <?php echo $login_results['status']; ?></h3>
        <form action="query.php">
            <label for="newstatus">Change Status:</label><br>
            <input type="text" id="newstatus" name="newstatus" value="<?php echo $login_results['status']; ?>"><br>
            <input type="submit" value="Submit">
        </form> 
    </div>
    </div>
    <div class="center_text">
        <h3>Friends</h3>
        <p><?php echo $friend_results['username_target'] ?></p>


    </div>


</div></div>

</body>
</html>