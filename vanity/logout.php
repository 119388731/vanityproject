<?php
//referenced from https://gitlab.com/tutorialsclass/php-simple-login-registration-script
session_start();
session_destroy();
header("Location: login.php");
?>