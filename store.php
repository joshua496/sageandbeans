<html>
<body><h1>
    <?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['coffees'])){
        $selectedProduct = $_POST['coffees'];
        echo "Your Product is: " . $selectedProduct;
    }
}
?>

