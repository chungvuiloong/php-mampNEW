<?php
$path = 'img/logo.png';
?>
<?php include 'includes/header.php'; ?>

<?php 
if (file_exists($path)) {
    echo "The file $path exists" . "<br>";
    echo "Filename : " . pathinfo($path, PATHINFO_BASENAME) . "<br>";
    echo "File size: " . filesize($path) . "<br>";
    echo "File type: " . mime_content_type($path) . "<br>";
    echo pathinfo($path, PATHINFO_DIRNAME) . "<br>";
}
?>

<!-- <?php if (file_exists($path)) { ?>
<b>Name:</b> <?= pathinfo($path, PATHINFO_BASENAME)
?><br>
<b>Size:</b> <?=filesize($path) ?> bytes <br>
<b>MIME type:</b> <?=mime_content_type($path) ?><br>
<b>Folder: </b> <?=pathinfo($path, PATHINFO_DIRNAME) 
?> <br>
<?php } 
else { ?>
<p>There is no such file.</p>
<?php } ?> -->

<?php include 'includes/footer.php'; ?>