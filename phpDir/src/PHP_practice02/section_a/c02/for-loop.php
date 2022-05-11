<?php
// Create a simple for loop to find prices of multiple packs of candy. 
// Let us assume one pack of candy costs $1.99. 
// How much 10 packs cost? 
// Display each packs costs in the web page.

$candyPrice = 1.99;
$totalPriceSum = 0;
// $candyAmount = 0;

?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    
    for ($candyAmount = 1; $candyAmount <= 10; $candyAmount++) {
      $totalPriceSum += $candyPrice;
      echo $candyAmount . " candy pack costs " . $totalPriceSum . "<br>";
    }
    

    ?>
  </p>
</body>

</html>