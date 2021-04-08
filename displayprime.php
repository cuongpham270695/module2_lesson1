<?php
function checkPrime($number)
{
    if ($number < 2) {
        return false;
    } else {
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $display = $_POST["display"];
    $amount = $_POST["amount"];
    $result = "";
    $count = 0;
    $number = 2;
    if (isset($display)) {
        if (empty($amount)) {
            $error = "Error!";
        } else {
            while ($count < $amount) {
                if (checkPrime($number)) {
                    $result = $result . " " . $number;
                    $count++;
                    $number++;
                } else $number++;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print prime number</title>
</head>
<body>
<div>
    <form action="displayprime.php" method="post">
        <label for="number">Enter amount of number you want to display:</label>
        <input type="number" name="amount" id="number">
        <button name="display">Display</button>
    </form>
</div>
<div>
    <?php
        if(!empty($result)){
            echo $result;
        }
    ?>
</div>
</body>
</html>
