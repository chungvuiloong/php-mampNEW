<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">

  <form action="6.php" method="POST">    
    <input type="text" name="submit" id="textbox">    
    <button type="submit">Submit</button>
  </form>
    
    
    <?php

    if (isset($_POST["submit"])) {
    echo $_POST["submit"];
    }
    ?>

  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php"; ?>