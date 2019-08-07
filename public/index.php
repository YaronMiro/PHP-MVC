<?php

/*
*   DEBUG
*
* Show All errors
*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./autoload.php');


use \Models\User;
use \Models\Animals\Cat;
use \Http\Requests\Main\Test;


$test = new Test('ABC');
$user = new User('Yaron Miro');
$cat = new Cat('mika');
print $user;
print '</br>';
print $cat;
print '</br>';
print $test;
