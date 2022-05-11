<?php
// /* Write PHP code here collect three different city names 
//  show the address of a store in that city. 
// For example ‘Helsinki’ has address ‘Kaivokatu 1, 00100 Helsinki’, 
// ‘London’ has for example ’48 Store Street, WC1E, 7BS 
//  ‘Sydney’ has address e.g. ‘1243 7th Street, 10212’

$cities = [
    "Helsinki" => "Kaivokatu 1, 00100 Helsinki",
    "London" => "48 Store Street, WC1E, 7BS",
    "Sydney" => "1243 7th Street, 10212",
];

$city = $_GET["city"];
$address = $cities[$city];

?>

<?php include 'includes/header.php' ?>

<?php foreach ($cities as $key => $value) { ?>
    <a href="get-1.php?city=<?= $key ?>"><?= $key ?></a> 
    <?php } ?>
    <h1><?= $city ?></h1>
    <h1><?= $address ?></h1>

<?php include 'includes/footer.php' ?>