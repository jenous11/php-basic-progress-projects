<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $firstname=htmlspecialchars($_REQUEST["firstname"]);
    $lastname=htmlspecialchars($_REQUEST["lastname"]);
    $favouritepet=htmlspecialchars($_REQUEST["favouritepet"]);
    
    if(empty($firstname)){
        exit();
       header("Location: ../form.php");
}
 
        echo"the users input are as follows: ";
        echo "<br>";
        echo "name: ".$firstname;
        echo "<br>";
        echo "lastname: ".$lastname;
        echo "<br>";
        echo "favouritepet: ".$favouritepet;


}

else{
header("Location: ../form.php");
exit();
}

?>