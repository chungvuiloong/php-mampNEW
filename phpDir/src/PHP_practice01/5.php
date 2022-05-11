<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

//  step 1 - Use a pre-built math function here and echo it
echo pi() . "<br>";

// Step 2:  Use a pre-built string function here and echo it
$string = "mouse";
echo strlen($string) . "<br>";

// Step 3:  Use a pre-built Array function here and echo it
$cars = array("BMW", "Lambo", "Mercedes");
echo count($cars) . "<br>";
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>