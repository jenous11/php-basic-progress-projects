<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Welcome to  dad joke generator!
    </h1>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    <button type="submit">Tell me!</button>
    </form>
<br>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
    <button type="submit">answer!</button>
    </form>

</body>
</html>

<?php
echo "<br>";
if($_SERVER["REQUEST_METHOD"]=="POST"){
// $array=" why does a house wear? ";
// echo $array;
$arrays=["what does a house wear? "=>"address"];
echo(print_r($array));
}

if($_SERVER["REQUEST_METHOD"]=="GET"){
  foreach($arrays as $array){
    echo $array;
  }
// $array2="ADDRESS 👗🥻";
// echo $array2;

}
?>