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
    <button type="submit" onclick="myFunction()">Crack One!</button>
    </form>


</body>
</html>

<?php
echo "<br>";
echo "<br>";

$rnum =rand(0,2);

$jokes=[
     "what does a house wear? ",
    "why can't a cycle stand on it's own?",
    "which fruit suddenly becomes visible?"
];

$ans=[
    "Address 👗👗",
    "Because it's too tired 🚲🚲",
    "appear 🍐"
];
    if($_SERVER["REQUEST_METHOD"]=="POST" ){
        echo $jokes[$rnum]."<br>";
        echo $ans[$rnum];

    }


?>