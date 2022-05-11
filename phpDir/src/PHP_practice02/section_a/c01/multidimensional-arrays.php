<?php

/* 
  Write a PHP code to store indexed arrays in an array or multidimentional array with variable called $offers. 
  Each element in the array stores associated array holding name, price, and stock level of an item that is on offer. 
  Print out the name and price of all the products.

   */

$offers = [
  ["name" => "iPhone", "price" => 1000, "stock" => 2],
  ["name" => "MacBook", "price" => 2000, "stock" => 4],
  ["name" => "MacMini", "price" => 1600, "stock" => 3],

];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <p>Item: <?= $offers[0]["name"]?> Price: € <?= $offers[0]["price"]?> Available: <?= $offers[0]["stock"]?></p>
  <p>Item: <?= $offers[1]["name"]?> Price: € <?= $offers[1]["price"]?> Available: <?= $offers[1]["stock"]?></p>
  <p>Item: <?= $offers[2]["name"]?> Price: € <?= $offers[2]["price"]?> Available: <?= $offers[2]["stock"]?></p>

</body>

</html>