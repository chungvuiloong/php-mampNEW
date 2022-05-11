<?php 
  require "config.php"; 
  require "submit.php";  
  require "delete.php"; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSS  -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/leftSideBar.css">
  <link rel="stylesheet" href="css/rightSideBar.css">
  <link rel="stylesheet" href="css/layout.css">
  <link rel="stylesheet" href="css/posts.css">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
    <title>Blog</title>
</head>

<body>
 
  <!-- Left navbar -->
  <div class="grid-container">
    <nav class="sidebar">    
      <i class="fa-brands fa-twitter"></i>
      <a href="#">Home</a>
      <a href="#">Explore</a>
      <a href="#">Notifications</a>
      <a href="#">Messages</a>
      <a href="#">Bookmarks</a>
      <a href="#">Lists</a>
      <a href="#">Profile</a>
      <a href="logout.php">LogOut</a>
      <a href="#">More</a>

      <div class="tweetButton">Tweet</div>

      <div class="userProfileContainer">
        <div>Username</div>
        <div>@username</div>
      </div>
    </nav>

    <!-- Right navbar 
    <nav class="rightSidebar">    
      <input type="text" class="search">
      <a href="#">Explore</a>
      <a href="#">Notifications</a>
      <a href="#">Messages</a>
      <a href="#">Bookmarks</a>
      <a href="#">Lists</a>
      <a href="#">Profile</a>
      <a href="#">More</a>
    </nav> 
    -->

 
    <nav class="rightSidebar">    
      <input type="text" class="search" placeholder="Search Tweeter">
    </nav> 

    <!-- Input for content -->

  
    <form action="home.php?action=submit" method="post" enctype="multipart/form-data" class="form">

      <!-- Input for content -->
      <label for="content"> </label>
      <input type="text" name="content" placeholder="What's happening?">

      <label for="uploadFiles"> </label>
      <input type="file" name="file" id="fileToUpload">

      <!-- Submit Button -->
      <input type="submit" name="submit" value="Submit">
    </form>

    <?php require "allData.php"; ?>

    <div class="blogContainer">
      <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="contentItem">
            <p><?php echo $row['content']?></p>
            <br>
            <small><?php echo date($row['dateCreated']);?></small>

            <button class="delete" name="delete"> 
              <a href="home.php?delete=<?php echo $row['id'] ?>">Delete</a> 
            </button>

            <!--
            <small><?php echo date('Y-m-d',strtotime(intval($row['dateCreated'])));?></small>
            <small><?php echo date('h:i:sa', strtotime(intval($row['dateCreated'])));?></small>
            

          
              <button class="update" name="update"> 
                <a href="index.php?update=<?php echo $row['id'] ?>">Update</a> 
              </button>

              <a href="index.php?delete=<
                ?php echo $row['id']?>">Delete</a> 
              
            -->
        </div>
      <?php } ?>
    </div>
  </div>

  


<?php mysqli_close($conn); ?>
</body>

</html>