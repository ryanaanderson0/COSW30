<?php
// Create environment variables
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('DB_USERNAME_CRUD');
$password   = getenv('DB_PW_CRUD');
$dbname     = getenv('DB_NAME_CRUD');
// Establish the connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);
?>