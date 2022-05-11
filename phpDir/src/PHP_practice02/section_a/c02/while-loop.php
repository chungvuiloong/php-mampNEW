<?php
// Create a simple while loop to find prices for multiple packs of candy. 
// For example if one pack costs $1.99 how much would 5 pack costs. 
// Display the prices for all the 5 packs of candy. 


$sumPrice = 0;
$candyAmount = 0;

?>
<!DOCTYPE html>
<html>

<head>
  <title>while Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Prices for Multiple Packs</h2>
  <p>
    <?php
    
    

  while ($candyAmount <= 5) {
    $candyAmount++;
    $sumPrice += 1.99;
    echo $candyAmount . " candy pack cost " . $sumPrice . "<br>";
  };

    ?>
  </p>
</body>

</html>