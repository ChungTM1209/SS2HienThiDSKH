<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="myCss.css"/>

</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product = $_POST["product"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $discount_amount = $price * $discount * 0.01;
    $discount_price = $price - $discount_amount;
    if ($price > 0 && $discount > 0) {
        echo("<h3>Product Discount Calculator</h3><br>");
        echo("Product Descripton: " . $product . "<br>");
        echo("List Price: $" . $price . "<br>");
        echo("Discount Percent: %" . $discount . "<br>");
        echo("Discount Amount: $" . $discount_amount . "<br>");
        echo("Discount Price: $" . $discount_price . "<br>");
    }
}
?>
</body>
</html>