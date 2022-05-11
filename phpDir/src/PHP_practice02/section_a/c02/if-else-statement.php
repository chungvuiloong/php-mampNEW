<?php
$candyAmount = 5;
?>
<!DOCTYPE html>
<html>

<head>
  <title>if else Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Chocolate</h2>


  <!-- 
  Create a simple if else statement to check if candy is in the stock or no. 
  If candy is not in stock then print message “Sold Out”.
  if it is availaible in stock, print message “In Stock.
  -->

  <?php
  if ($candyAmount == 0) {
    echo "Sold Out";
  } elseif ($candyAmount > 0) {
    echo "In stock";
  };
  


  ?>

</body>

</html>