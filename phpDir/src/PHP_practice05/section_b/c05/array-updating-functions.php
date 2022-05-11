<?php
// Write PHP Code to create array of items being ordered, 
// add an item to start of array, 
// remove the last item from array, 
// convert to string and loop through keys and values of the associative array. 

$orderedItems = ["flour", "choco", "cola", "laptop"];

array_unshift($orderedItems, 'MacBook');
array_pop($orderedItems);

?>
<?php include 'includes/header.php'; ?>

<h1>Order</h1>
<?php

foreach($orderedItems as $key => $value)
{
  echo $key . $value . "<br>";
}


?>
<!-- // Write your code here -->

<?php include 'includes/footer.php'; ?>