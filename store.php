<html>
<body><h1>
    <?php
    $quantity= $_POST['cquan'];
    $payment= $_POST['cpay'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['coffees'])){
        $selectedProduct = $_POST['coffees'];
        echo "Your Product is: " . $selectedProduct;
        $bill=$quantity*$selectedProduct;
        echo "Your Product is: " . $bill;
    }
}
?>

