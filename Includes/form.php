<?php
// we are not outputting data in browser so no need to do htmlspecialcharaters
if($_SERVER["REQUEST_METHOD"]=="POST"){
 $id=$_POST["id"];   
$username =$_POST["username"];

try{
    require_once "dbconnect.php"; 
    $query ="INSERT INTO students(id,username) VALUES ( :id, :username );";

    $stmt = $pdo->prepare($query); 

    $stmt->bindParam(":id",$pwd); 
    $stmt->bindParam(":username",$username);

$stmt->execute();
    $pdo = null;
    $stmt= null;

    header("Location: ../index2.php");
    
    die();
}   
catch(PDOException $e)
{
die("Query failed: ".$e->getMessage());

}
}

else{
    header("Location: ../index2.php");
}