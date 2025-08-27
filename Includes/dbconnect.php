<?php
$dsn ="mysql:host=localhost;dbname=myseconddatabase";
$dbusername="root";  // these are the defaults 
$dbpassword="chelse@11";

//connect
try{

    $pdo = new PDO($dsn,$dbusername,$dbpassword); //pdo=php data objects
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (exception $e){
echo"the cause of error is: ".$e->getMessage();
}
