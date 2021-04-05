<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Calculator</title>
</head>
<body>
<form action="" method="post" class="board">
    <h1>Simple Calculator</h1>
    <label for="first">First Overand: </label>
    <input type="number" name="firstNum" placeholder="Enter the first number" id="first"><br/>
    <label for="operator">Operator</label>
    <select name="operator" id="operator">
        <option value="+">Addition</option>
        <option value="-">Subtraction</option>
        <option value="*">Multiply</option>
        <option value="/">Divide</option>
    </select><br/>
    <label for="second">Second Overand:</label>
    <input type="number" name="secondNum" placeholder="Enter the second number" id="second"><br/>
    <input type="submit" value="Calculate">
</form>
</body>
</html>
<?php
function calculation($num1, $operator, $num2)
{
    switch ($operator) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
            return $num1 / $num2;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["firstNum"];
    $operator = $_POST["operator"];
    $num2 = $_POST["secondNum"];
    $result = calculation($num1, $operator, $num2);
    echo "<h2>"."Result: $num1 $operator $num2 = $result"."</h2>";
}
?>