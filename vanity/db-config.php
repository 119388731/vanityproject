<?php
//adapted from https://gitlab.com/tutorialsclass/php-simple-login-registration-script/-/blob/master/db-config.php
$databaseHost     = 'localhost';
$databaseName     = 'vanityprojectdb';
$databaseUsername = 'root';
$databasePassword = '';

$con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>