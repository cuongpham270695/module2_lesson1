<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submit = $_POST["submit"];
    $money = $_POST["money"];
    $rate = 23000;
    if(isset($submit)){
        if(empty($money)){
            $error= "Insert!!";
        }else {
            $result = $money * $rate;
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
    <title>Convert Money</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<div>
<form action="" method="post">
    <label for="money">Insert money: </label>
    <input type="number" name="money" id="money">
    <label>USD</label>
    <br/>
    <button name="submit">Convert</button>
</form>
</div>
<div>
    <p>
    <?php
        if(isset($error)){
            echo "Insert number!!";
        }else if(isset($result)){
            echo $money."USD = $result VND";
        }
    ?>
    </p>
</div>
</body>
</html>

