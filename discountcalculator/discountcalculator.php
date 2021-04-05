<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount</title>
    <style type="text/css">
        .calculate input{
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <form action="discountcalculator2.php" method="post">
    <div class="calculate">
        <input type="text" name="product_description" placeholder="Description the product">
        <input type="number" name="list_price">
        <input type="number" name="discount"><br/>
        <input type="submit" name="submit" value="Calculate Discount">
    </div>
    </form>
</body>
</html>