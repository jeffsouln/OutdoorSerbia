<?php
require_once "config.php";
$username = "adem4";
$username = Validation::mainValidation($username);
print_r(!Validation::usernameValidation($username));