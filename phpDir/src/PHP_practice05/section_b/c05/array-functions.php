<?php
// Write PHP Code to create array of greetings 
// then get random value, 
// find array of best sellers, 
// count items and list top items, 
// create an array holding customer details. 
//Finally, show the top 3 best sellers items in website. 

// Write PHP code here

$greetings = array("Welcome! ", "Salutation ", "Tervetuloa ", "Konnichiwa ", "Howdy ");
$randomGreet = array_rand($greetings);
$greeting = $greetings[$randomGreet];

$best_sellers = array("Pikachu Power!", "Bulbasuar Blast!", "Charmander Cherry");

$customer = ["firstname" => "Nina", "lastname" => "Liima", "email" => "ninaliima@gmail.com"];

if (array_key_exists("firstname", $customer)) {
    $greeting .= $customer["firstname"];
}

?>
<?php include 'includes/header.php'; ?>
<?php 
// echo $greetings[rand(1, count($greetings)-1)]; // array_rand($greetings);
echo $greeting;

?>

<h1><?PHP echo "Top " . count($best_sellers)?> Best Sellers</h1>
<?php echo implode("<br>", $best_sellers)?>




<?php include 'includes/footer.php'; ?>