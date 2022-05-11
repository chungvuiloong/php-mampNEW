<?php
/* Write your code here */
// Create a simple for loop to find prices of multiple higher packs of candy. 
// Let us assume customer wants from 10 packs to 100 packs of candies. 
// How much 10 to 100 packs cost? 
// Display from 10 packs to 100 packs cost in the web page.

$candyPrice = 1.99;
$totalPriceSum = 0;
// $candyAmount = 0;

?>
<!DOCTYPE html>
<html>

<head>
  <title>for Loop - Higher Counter</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Large Orders</h2>
  <p>
    <?php
    
    for ($candyAmount = 10; $candyAmount <= 100; $candyAmount++) {
      $totalPriceSum += $candyPrice;
      echo $candyAmount . " candy pack costs " . $totalPriceSum . "<br>";
    }

    ?>
  </p>
</body>

</html>