<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value</title>
    <style type="text/css">
        .calculate {
            height: 180px;
            width: 230px;
            margin: 0;
            padding: 10px;
        }
        .calculate input{
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <div class="calculate">
    <input type="number" name="Investment_Amount" placeholder="Investment Amount"><br/>
    <input type="number" name="Yearly_Interest_Rate" placeholder="Yearly Interest Rate"><br/>
    <input type="number" name="Number_Of_Years" placeholder="Number Of Years"><br/>
    <input type="submit" name="submit" value="Submit">
    </div>
</form>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $investmentAmount = $_POST["Investment_Amount"];
        $yearlyInterestRate = $_POST["Yearly_Interest_Rate"];
        $numberOfYears = $_POST["Number_Of_Years"];
        $result = 0;
        for ($i = 0; $i < $numberOfYears; $i++) {
            $result = $investmentAmount + ($investmentAmount * $yearlyInterestRate / 100);
            $investmentAmount = $result;
        }
        echo $result;
    }
?>