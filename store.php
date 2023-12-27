<html>
<body><h1>
<?php
$values = $_POST['coffees'];
$quantity = $_POST['cquan'];
$payment =$_POST['cpay'];
foreach ($values as $product){
    return;
}
$bill = $product * $quantity;
    $change= $payment - $bill;
    echo "Your Change is:"  .$change.;

?>