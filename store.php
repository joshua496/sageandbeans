<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Transaction</title>
  <!--CSS link-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Ruluko&display=swap');
      </style>
</head>
<body>
    </head>
<body>
    
<?php
$values = $_POST['coffees'];

foreach ($values as $price){
    $quantity = $_POST['cquan'];
    $bill = $price * $quantity;
    $payment = $_POST['cpay'];
    $change= $payment - $bill;

    if($bill>1000){
        $status= "Good Sale";
    }
    else{
         $status= "Bad Sale";
    }
}
?>
<div class="card-container">
        
       <div class="card">
       <h2><?php
       if ($payment>$bill){
        echo "Thank you for your purchase!";
       }
       else {
        echo "Your Payment is not enough!";
       }
       ?></h2><?php
       if ($payment>$bill){
        echo '<img src="images/cat.jpg">';
       }
       else {
        echo '<img.src="images/mike.jpg">';
       }
       ?>
       <img src="images/cat.jpg">
       <!-- insert lang ang bill diri-->
       <p>Your Total Bill is: ₱<?php echo $bill ?></p>
       <!--insert lang ang payment diri-->
       <p>Your Cash is: ₱<?php echo $payment ?></p>
       <!-- insert lang ang Change diri-->
       <p><?php     
        if ($payment>$bill){
            echo "Your Change is: ₱".$change.'';
        }
        else{
            echo "";
        }
       ?></p>
        <!-- insert lang ang status diri-->
       <p><?php
        if ($payment>$bill){
            echo "Sale Status: ".$status.'';
        }
        else {
            echo "";
        }
       ?></p>
       <p><a href="store.html">Back To The Store</a></p>
        </div>
        
</body>
</html>
