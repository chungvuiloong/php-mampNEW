<?php

/* 
  Write you php code here

   */

  $candy_1 = 5;
  $number_candy = 3;

  $sub_total = $candy_1 * $number_candy;

  $tax = $sub_total * .2;
  $total = $tax + $sub_total;

?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p>Subtotal is € <?= $sub_total ?></p>
  <p>Tax is € <?= $tax ?></p>
  <p>Total is € <?= $total ?></p>

</body>

</html>