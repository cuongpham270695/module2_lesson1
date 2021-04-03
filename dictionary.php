<html lang="en">
<head>
    <meta charset="doc">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
    <style>
        input[type="text"] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #CCC;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Dictionary English-Vietnamese</h2>
<form method="post">
    <input type="text" name="search" placeholder="Enter your word: "/>
    <input type="submit" id="submit" value="find"/>
</form>
</body>
</html>
<?php
$dictionary = array(
    "hello" => "xin chào",
    "how" => "thế nào",
    "book" => "quyển sách",
    "computer" => "máy tính");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word == $searchword) {
            echo "The word: " . $word . ". <br/>Meaning is: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "Don't find this word!!";
    }
}
?>