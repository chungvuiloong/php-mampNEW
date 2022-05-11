<?php include 'db.php';

    //   $query = "INSERT INTO Users(username, password)";
    //   $query .= "VALUES ('$user','$pass')";

    $query = "SELECT * FROM Users ";

      $result = mysqli_query($connection, $query);

      if (!$result) {
          die('Query failed');
        }

?>

<?PHP
    if (isset($_POST['submit'])) {
            $user = $_POST['username'];// Get data from username in HTML
            $pass = $_POST['password']; // Get data from password in HTML
            $id = $_POST['id'];

            //DOing the update
            // $query = "UPDATE Users SET ";
            // $query .= "username = '$user',"; ¸
            // $query .= "password = '$pass' "; // This must have a F*****kin space
            // $query .= "WHERE id = $id";

            // $query = "UPDATE Users SET username = '$user', password = '$pass' WHERE id = $id";

            
            // delete
            // $query = "DELETE FROM Users WHERE id = $id";


            $query = "DELETE FROM Users ";
            $query .= "WHERE id = $id";


          $result = mysqli_query($connection, $query);

        if (!$result) {
          die('Delete Query failed');       
        }
    }
?>




<form action="blank.php" method="post">
  <label for="username">Username</label>
  <input type="text" name="username">
  <label for="password">Password</label>
  <input type="password" name="password">
  <select name="id" id="">
      <?php
      while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
      }
      ?>

  </select>

  <input type="submit" name="submit" value="DELETE">
</form>


<!-- <form action="blank.php" method="post">
  <label for="username">Username</label>
  <input type="text" name="username">
  <label for="password">Password</label>
  <input type="password" name="password">
  <input type="submit" name="submit">
</form> -->
