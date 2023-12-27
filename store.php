<html>
<body><h1>
<?php
$values = $_POST['coffees'];
$quantity = $_POST['cquan'];
$payment =$_POST['cpay'];
foreach ($values as $product){
    $bill = $product * $quantity;
    $change= $payment - $bill;
    echo "<p>Product: $product</p>";
    echo "<p>Product: $quantity</p>";
    echo "<p>Product: $bill</p>";
    echo "<p>Product: $payment</p>";
}


?>