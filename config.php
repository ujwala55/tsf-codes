<?php
// database connection file
$databaseHost = 'localhost';//or localhost
$databaseName = 'id17408352_mydb'; // your db_name
$databaseUsername = 'id17408352_tsf'; // root by default for localhost 
$databasePassword = 'ujwala#123#A';  // by defualt empty for localhost

$cser = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>