<?php
  if (isset($_POST['submit'])) {
    $content = $_POST['content'];


    //Validate the form
    if ($content) {
    // echo $text;
    } else {
      echo "Username and password fields cannot be blank";
    }

    // Add data into todo database
    $add = "INSERT INTO blogTable(content)";
    $add .= "VALUES ('$content')";
    $added = mysqli_query($conn, $add);
    
  }

?>