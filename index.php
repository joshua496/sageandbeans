<html>
<body><h1>
<?php
$values = $_POST['coffees'];

foreach ($values as $a){
    $b = $_POST['cquan'];
    $c = $a * $b;
    echo $c;
}
?>