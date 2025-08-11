<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> method="post">
        number 1:
        <input type="text" name="num01">
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        number 2:
        <input type="number" name="num02">
        <button type="submit">calculate</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $operator = htmlspecialchars($_POST["operator"]);

        $error = false;
        if (empty($num01) || empty($num02) || empty($operator)) {
            $error = true;
        echo "<p class='calc-error'>Fill in all fields!</p>";
        }
        
    if (!is_numeric($num01) || !is_numeric($num02)) {
        echo "<p class='cal-error'>Only write numbers!</p>";
        $errors = true;
    }
        if (!$error) {
            switch ($operator) {
                case '+':
                    echo $num01 + $num02;
                    break;
                case '-':
                    echo $num01 - $num02;
                    break;
                case '*':
                    echo $num01 * $num02;
                    break;
                case '/':
                    echo $num01 / $num02;
                    break;
                default:
                    echo "there must be some errors";
                    break;
            }
        }
    }
    ?>

</body>

</html>