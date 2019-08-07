<h1> Home Page</h1>


<?php

/*
*   DEBUG
*
* Show All errors
*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./config/Database.php');


$db = new Database();
$db->connect();

// https://github.com/bradtraversy/php_rest_myblog
