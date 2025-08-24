<?php
$dsn ="mysql:host=localhost;dbname=myseconddatabase";
$dbusername="root";  // these are the defaults 
$dbpassword="chelse@11";

//connect
$pdo = new PDO($dsn,$dbusername,$dbpassword); //pdo=php data objects
