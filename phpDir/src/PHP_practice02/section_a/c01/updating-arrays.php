<?php

/* 
  Write a PHP code to  create and store array in $nutrition, 
  the value that is stored for the fat content should be updated 
 add a new element e.g. fiber and write those values out to the page
   */

   $nutrition = ["fat" => 10,];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <?php 
  $nutrition = [
    "fat" => 15, 
    "fiber" => 15,
  ];

  echo $nutrition["fat"];
  echo $nutrition["fiber"];

  // for ($i = 0; $i <= 2; $i++) {
  //   echo $nutrition[$i];
  // };


  ?>

</body>

</html>