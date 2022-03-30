<?php
include("dbconnect.php");

#Query Database for blog titles
$blog_sql = "SELECT title,img,link FROM blogs";
$blog_qry = mysqli_query($blog_db, $blog_sql);
$blog_results = mysqli_fetch_assoc($blog_qry);

$i = 0;



do{
  $blog_titles[$i] = $blog_results['title'];
  $blog_imgs[$i] = $blog_results['img'];
  $blog_urls[$i] = $blog_results['link'];
  $i += 1;
} while ($blog_results = mysqli_fetch_assoc($blog_qry));
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>PI SERVER B</title>
  </head>

  <body>
  <div class="container">
    <div class="Navbar">
    <a href="https://io.adafruit.com/Greenbird2026/dashboards/raspberrypi-test">Home</a> 
    <a href="https://io.adafruit.com/Greenbird2026/dashboards/plant-waterer">Plants</a>
    <a href="https://io.adafruit.com/Greenbird2026/dashboards/co2-sensors">Air Quality</a>
    <a href="http://192.168.1.132">Desk Server</a>
    <a href="http://192.168.1.20/phpmyadmin/">phpMyAdmin</a>
    </div>

    
    <div class="Blogs">
    <h1>Top Blogs</h1>

   
    <div class="Blogs_grid">
    <div class="Blog_link"><h3><?php echo $blog_titles[0]?></h3>
    <a href="blogs.php?blog=<?php echo $blog_urls[0] ?>"><img src=<?php echo $blog_imgs[0]?> alt=<?php echo $blog_imgs[0]?>></a></div>

    <div class="Blog_link"><h3><?php echo $blog_titles[1]?></h3>
    <a href="blogs.php?blog=<?php echo $blog_urls[1] ?>"><img src=<?php echo $blog_imgs[1]?> alt=<?php echo $blog_imgs[1]?>></a></div>

    <div class="Blog_link"><h3><?php echo $blog_titles[2]?></h3>
    <a href="blogs.php?blog=<?php echo $blog_urls[2] ?>"><img src=<?php echo $blog_imgs[2]?> alt=<?php echo $blog_imgs[2]?>></a></div>
    
    </div>

    </div>

    </div>
  </body>

</html>
