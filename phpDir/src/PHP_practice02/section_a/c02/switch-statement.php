<?php
/* Write your code here */
$today = date("D M j G:i:s T Y");
$todaysDay = date("D");

?>
<!DOCTYPE html>
<html>

<head>
  <title>switch Statement</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <?php
  // Create a simple switch statement to get 20% off chocolates on Monday, 
  // 20% off mints on Tuesday
  // other cases it should show “Buy three packs, get one free”

  switch ($todaysDay) {
    case "Mon":
      echo "20% off chocolates on " . $todaysDay;
      break;

      case "Tue":
        echo "20% off mint on " . $todaysDay;
        break;

        case "Wed":
        case "Thu":
        case "Fri":
        case "Sat":
        case "Sun":
          echo "Buy three packs, get one free on " . $todaysDay;
          break;
      
  }


  ?>
</body>

</html>