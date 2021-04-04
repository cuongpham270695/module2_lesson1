<?php
function changeOneDigitNumber($num){
    $arr = ["zero","one","two","three","four","five","six","seven","eight","nine"];
    return $arr[$num];
};
function changeTwoDigitNumber($num){
    $teen = [10=>"ten",11 =>"eleven",12=>"twelve",13=>"thirteen",14=>"forteen",15=>"fifteen",16=>"sixteen",17=>"seventeen",18=>"eighteen",19=>"nineteen"];
    $ty = [2=>"twenty",3=>"thirty",4=>"forty",5=>"fifty",6=>"sixty",7=>"seventy",8=>"eighty",9=>"ninety"];
    if($num<20){
        return $teen[$num];
    }else{
        if ($num[1]==0){
            return $ty[$num[0]];
        }else{
            return $ty[$num[0]]. " " . changeOneDigitNumber($num[1]);
        }
    }
}
function changeThreeDigitNumber($num){
    if(($num%100)==0){
        return changeOneDigitNumber($num[0])." hundred";
    }else if($num[1]==0){
        return changeOneDigitNumber($num[0])." hundred and " . changeTwoDigitNumber($num[2]);
    }else{
        return changeOneDigitNumber($num[0])." hundred and ".changeTwoDigitNumber($num[1].$num[2]);
    }
}
function readNumber($num){
    $num=(string)intval($num);
    switch (strlen($num)){
        case 1:
            $result = changeOneDigitNumber($num);
            break;
        case 2:
            $result = changeTwoDigitNumber($num);
            break;
        case 3:
            $result = changeThreeDigitNumber($num);
            break;
        default:
            $result= "Out of ability";
    }
    return $result;
}
$result= "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num = $_POST["inputNumber"];
    $result = ucfirst(readNumber($num));
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Number by Word</title>
</head>
<body>
    <h2>Read number by Word</h2>
    <form method="post">
        <input type="text" name="inputNumber" id="inputNumber">
        <input type="submit" name="submit" id="submit" value="Change">
    </form>
    <h4><?= $result; ?></h4>
</body>
</html>
