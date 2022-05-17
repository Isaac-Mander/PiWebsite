<?php
// Connection details for our database
//Remote server
//$heroku_db = mysqli_connect('eu-cdbr-west-02.cleardb.net','b3f9053b24d2d9','359d6e2f','heroku_c0931c115c29e04');

//Local Server if remote unavailable
//heroku_db = mysqli_connect('localhost','admin','1234','mainsite');

//Laptop server for remote development
$heroku_db = mysqli_connect('localhost','root','','mainsite');
 ?>