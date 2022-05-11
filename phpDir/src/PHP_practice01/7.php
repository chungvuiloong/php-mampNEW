<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/


	// $user = $_POST['username'];// Get data from username in HTML
	// $pass = $_POST['password']; // Get data from password in HTML
	// $id = $_POST['id'];

	// echo "Received data";

		$host = "db"; //servername normally localhost
		$dbname = "example_db"; // database name
		$dbuser = "root"; //  username
		$dbpass= "lionPass"; //userpassword

		// // Step 1) PDO 2) MYSQLI
		$connection = new mysqli($host, $dbuser, $dbpass, $dbname);

		if($connection->connect_error) {
		die("Connection failed" . $connection->connect_error);
		} 
		else {
			echo "Connection ok";
		}

		$query = "SELECT * FROM Cats ";

      	$result = mysqli_query($connection, $query);

      	if (!$result) {
          die('Query failed');
        } else {
			print_r($result);
		}


?>

<?php

//Inserting new user and password
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($username && $password){
	// echo $username . ' ' . $password;

	//Insert data into database
	$query2 = "INSERT INTO users(username, password)";
	$query2 .= "VALUES ('$username', '$password')";
	$result = mysqli_query($connection, $query2);
	} else {
	echo 'Please enter your username and password';
	}
	}

?>

<button type="button" name="button">Submit</button>

</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
