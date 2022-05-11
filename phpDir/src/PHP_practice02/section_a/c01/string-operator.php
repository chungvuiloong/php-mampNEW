<?php

/* 
  Write you php code here

   */
    $name = "Miss Niina";
    $thank_you = "Thank you, ";
    $order_greeting = $name . ' ' . "Order";
    $thank_you .= $name;


  //  Mr. James’s Order 
  // Thank you, Mr. James

?>
<!DOCTYPE html>
<html>

<head>
  <title>String Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <p> <?= $order_greeting ?> </p>
  <p> <?= $thank_you ?> </p>

</body>

</html>