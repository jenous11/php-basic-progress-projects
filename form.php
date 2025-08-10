<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="formhandle.php" method="post">
        <label for="firstname">
            firstname
            <input type="text" type="firstname" name="firstname">
        </label>
        <br>
        <label for="lastname">
            lastname
            <input type="text" type="lastname" name="lastname">
            <br>
        </label>
        select pet
        <select name="favouritepet" id="favouritepet">
            <option value="dog">dog</option>
            <option value="cat">cat</option>
            <option value="bird">bird</option>
            <option value="haster">hamster</option>
            <option value="none">none</option>
        </select>
        <br>
    <button type="submit">submit</button>
    </form>
</body>

</html>