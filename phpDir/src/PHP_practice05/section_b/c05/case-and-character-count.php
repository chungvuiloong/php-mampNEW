<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>
<!-- Write PHP Code to convert case in 
lowercase, 
uppercase, 
count number of characters and 
word count -->

  <!-- /** Write your code here */ -->

  <?PHP

echo strtolower($text) . "<br>";
echo strtoupper($text) . "<br>";
echo strlen($text) . "<br>";
echo str_word_count("$text") . "<br>";
?>
  
</p>

<?php include 'includes/footer.php'; ?>