<?php

/* 
  Write you php code here

   */

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrients 100g</h2>
  <?php  
  $nutrients = [
    ["fat" => "33%"],
    ["sugar" => "33%"],
    ["salt" => "33%"],
  ];
  
  echo "<p>Fat ", $nutrients[0]["fat"], "</p>";
  echo "<p>Sugar ", $nutrients[1]["sugar"], "</p>";
  echo "<p>Salt ", $nutrients[2]["salt"], "</p>";
  
  
  ;?>
</body>

</html>