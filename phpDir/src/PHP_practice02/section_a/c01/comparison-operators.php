<?php

/* 
  Write you php code here
  Write a PHP code to compare and check if the quantity wanted is less than or equal to quantity in stock. 
  If the user can buy based on comparison and if value is true, page should show 1 
  if false, the page should show nothing.
   */

  $offers = [
    ["name" => "iPhone13", "price" => 1000, "stock" => 2],
    ["name" => "iPhone15", "price" => 1000, "stock" => 0],
    ["name" => "MacBook", "price" => 2000, "stock" => 4],
    ["name" => "MacMini", "price" => 1600, "stock" => 3],
  ];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Comparison Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
  <p><?= $offers[1]["stock"] > 0 ?></p>

</body>

</html>