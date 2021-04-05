<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $description = $_POST["product_description"];
        $listPrice =$_POST["list_price"];
        $discountPercent=$_POST["discount"];

        $discountAmount = $listPrice*$discountPercent*0.01;
        $discountPrice = $listPrice - $discountAmount;

        echo "Product description: " .$description . "<br/>".
            "List price of the product: " .$listPrice . "<br/>".
            "Discount percent of product: " .$discountPercent ."%" ."<br/>".
            "Discount amount: " . $discountAmount . "<br/>".
            "Discount price: " . $discountPrice;
    }
?>