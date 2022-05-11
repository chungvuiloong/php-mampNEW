<?php
// Re-factor using ternary operator: 
// Create a simple if else statement to check if candy is in the stock or no. 
// If candy is not in stock then print message “Sold Out”, 
// if it is availaible in stock, print message “In Stock”
$candyAmount = 0;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ternary Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>
  <?php

   echo ($candyAmount == 0) ? "Sold Out" : "In stock";

  ?>
</body>

</html>