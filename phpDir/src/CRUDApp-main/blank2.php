<?php

session_start();// start the session

// $name = "fav";
// $value = 'whatever';
// $expiration = time() + (60*60*24*7); // a week from now

// setcookie($name, $value, $expiration);

// echo "Setting cookie: ";





$_SESSION["favcolor"] = "green";
$_SEESION["favanimal"] = "cat";

echo "Setting variables: ";
// if(isset($_COOKIE["cookie"])) {
//     $someone = $_COOKIE["cookie"];
//     echo $someone;
// } else {
//     $someone = "";
// }

?>

