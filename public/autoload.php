<?php

define('DM', DIRECTORY_SEPARATOR);
define('APPLICATION_PATH', dirname(__FILE__));

spl_autoload_register(function($className) {
    // Using PSR-0 convention.
    $className = str_replace("\\", DM, $className);
	include_once APPLICATION_PATH . DM . $className . '.php';
});