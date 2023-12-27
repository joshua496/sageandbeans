<!DOCTYPE html>
<html>
    <head>
        <title>Transaction</title>
    </head>
<body>
    
<?php
$values = $_POST['coffees'];

foreach ($values as $price){
    $quantity = $_POST['cquan'];
    $bill = $price * $quantity;
    $payment = $_POST['cpay'];
    $change= $payment - $bill;
    echo $change . "<br>";
    
    if($bill>1000){
        echo "Good Sale" . $bill;
    }else{
        echo "Bad Sale ". $bill;
    }
}
?>
</body>
</html>