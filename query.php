<?php
include("dbconnect.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PI SERVER B</title>
  </head>
   <body>
   <?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $name = "dfss";
    $age = 12;
    //To run a query on the database, we follow three steps:
      // Step 1: set up the query in a variable. Notice the naming convention, it ends in _sql
      $test_sql = "INSERT INTO exampledb.testing (`id`, `name`, `age`) VALUES (NULL, '$name', '$age');";
      // Step 2: We run the query using the mysqli_query() function
      // Notice the name of the variable, it ends with _qry
      $test_qry = mysqli_query($dbconnect, $test_sql);
      // Step 3: organise into array we can use more easily
      $test_aa = mysqli_fetch_assoc($test_qry);
      header( "Location: http://192.168.1.20/" )
    ?>
    
  </body>
</html>