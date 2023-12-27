<html>
<body><h1>
    <?php
    $quantity= $_POST['cquan'];
    $payment= $_POST['cpay'];
    $selectedProduct =$_POST['coffee'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach($selectedProduct as $price){
        $selectedProduct = $_POST['coffees'];
        echo "Your Product is: " . $selectedProduct;
        $bill=$quantity*$price;
        echo "Your Product is: " . $bill;
    }
}
?>

