<?php

//defining variables and setting them to empty values
$name=$email=$gender=$comment=$website="";

if($_SERVER['REQUEST_METHOD']=='POST') {
    $name       = test_inputs($_POST['name']);
    $email      = test_inputs($_POST['email']);
    $website    = test_inputs($_POST['website']);
    $comment    = test_inputs($_POST['comment']);
    $gender     = test_inputs($_POST['gender']);
}

function test_inputs($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
return $data;
}
?>



<h2> PHP form validation example</h2>

<!--Insert sanitise HTMLSPECIAL CHARS || STOPS being attached by other hackers -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
Name: <input type="text" name="name"><br><br>
Email: <input type="text" name="email"><br><br>
Website: <input type="text" name="website"><br><br>
Comments: <textarea name="comment" rows="5" cols="45"></textarea><br><br>
Gender: 
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="Other">Other
<br><br>

<input type="submit" name="submit" value="Submit">

</form>

<?PHP
echo "<h2>Your inputs: </h2>";
echo $name ."<br>";
echo $email ."<br>";
echo $website ."<br>";
echo $comment ."<br>";
echo $gender ."<br>";

?>