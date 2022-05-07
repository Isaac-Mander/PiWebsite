<?php
include("dbconnect.php");

#Query Database for blog titles
$blog_sql = "SELECT title,img,link FROM blogs ORDER BY views DESC";
$blog_qry = mysqli_query($heroku_db, $blog_sql);
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

    <?php include("navbar.php"); ?>
    <div class="Blogs">
    <h1>Popular Blogs</h1>

   
    <div class="Blogs_grid">

    <div class="Blog_link"><h3><span><?php echo $blog_titles[0]?></span></h3>
    <a href="blogs.php?blog=<?php echo $blog_urls[0] ?>"><img src=<?php echo "blog_img/$blog_imgs[0]"?> alt=<?php echo $blog_imgs[0]?>></a></div>

    <div class="Blog_link"><h3><span><?php echo $blog_titles[1]?></span></h3>
    <a href="blogs.php?blog=<?php echo $blog_urls[1] ?>"><img src=<?php echo "blog_img/$blog_imgs[1]"?> alt=<?php echo $blog_imgs[1]?>></a></div>

    <div class="Blog_link"><h3><span><?php echo $blog_titles[2]?></span></h3>
    <a href="blogs.php?blog=<?php echo $blog_urls[2] ?>"><img src=<?php echo "blog_img/$blog_imgs[2]"?> alt=<?php echo $blog_imgs[2]?>></a></div>

    <div class="Blog_link"><h3><span><?php echo $blog_titles[3]?></span></h3>
    <a href="blogs.php?blog=<?php echo $blog_urls[3] ?>"><img src=<?php echo "blog_img/$blog_imgs[3]"?> alt=<?php echo $blog_imgs[3]?>></a></div>
    
    <div class="Blog_link"><span><h3><?php echo $blog_titles[4]?></span></h3>
    <a href="blogs.php?blog=<?php echo $blog_urls[4] ?>"><img src=<?php echo "blog_img/$blog_imgs[4]"?> alt=<?php echo $blog_imgs[4]?>></a></div>

    </div>

    </div>

    </div>
  </body>

</html>
