<?php

  $name = "Eric";
  $candyName = "Temberone";
  $candyCost = 5;

  echo $name, ' buys ' ,$candyName,' costs ',$candyCost, ' euros';

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <?php

    $name = "Jeremy";
    $candyName = "Maltheser";
    $candyCost = 10;
  ;?>

  <p>Welcome <?= $name?></p>
  <p> Your candy , <?=$candyName ?>, costs <?=$candyCost?> euros </p>


</body>

</html>