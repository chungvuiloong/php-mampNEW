<?php
      $host = "db"; //servername normally localhost
      $dbname = "loginapp"; // database name
      $dbuser = "root"; //  username
      $dbpass= "lionPass"; //userpassword

      // Step 1) PDO 2) MYSQLI
      $connection = new mysqli($host, $dbuser, $dbpass, $dbname);

	  if($connection->connect_error) {
        die("Connection failed" . $connection->connect_error);
      } 
      else {
          echo "Connection ok";
      }
?>