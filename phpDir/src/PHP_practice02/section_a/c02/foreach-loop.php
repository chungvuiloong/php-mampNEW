<?php
/* Create a simple foreach loop for candy products 
e.g. Toffee costs 2.99, Mints cost 1.99 and Fudge costs 3.49 
show it in the web page table  */

$candy = array("toffee" => "2.99", "mint" => "3.49", "fudge" => "3.49");

?>
<!DOCTYPE html>
<html>

<head>
  <title>foreach Loop</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Price List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
    </tr>
    <?php
    foreach($candy as $x => $val) {
      echo "$x = $val<br>";
    }

    ?>
  </table>
</body>

</html>