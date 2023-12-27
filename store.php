<html>
<body><h1>
<?php
$values = $_POST['coffees'];
$quantity = $_POST['cquan'];
$payment =$_POST['cpay'];
foreach ($values as $product){
    $bill = $product * $quantity;
    $change= $payment - $bill;
    echo $product;
    echo $quantity;
    echo $payment;
    echo $bill;
}


?>