<?php 
include("dbconnect.php");


$blog_id = $_GET['blog'];

$blog_sql = "SELECT title,img,file_name,views FROM blogs WHERE link = '$blog_id';";
$blog_qry = mysqli_query($heroku_db, $blog_sql);
$blog_results = mysqli_fetch_assoc($blog_qry);


$blog_title = $blog_results['title'];
$blog_img = $blog_results['img'];
$blog_file = $blog_results['file_name'];

$new_viewcount = $blog_results['views'] + 1;

$blog_view_insert_sql = "UPDATE blogs SET views = $new_viewcount WHERE link = '$blog_id';";
$blog_view_insert_qry = mysqli_query($heroku_db, $blog_view_insert_sql);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title><?php echo $blog_title ?></title>
</head>

<body>
    <div class="container">

    <?php include("navbar.php"); ?>
    
    <div class='blog_uni'>
    <div class="blog_high">

    <div class = "left_align"><h4>Views <?php echo $new_viewcount; ?></h4></div>
    
    <h1><?php echo $blog_title; ?></h1>
    <img src=<?php echo "blog_img/$blog_img"; ?>>
    </div>

    <div class="blog_low">
        <?php
        $file = fopen("blog_text/$blog_file", "r");
        // Reading a .txt file line by line
        while(!feof($file)) {
            ?><p><?php echo fgets($file). ""; ?></p><?php
        }
        ?>
    </div>
    </div>


    </div>
</body>
</html>