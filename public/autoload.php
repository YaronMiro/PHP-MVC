<?php

define('APPLICATION_PATH', dirname(__FILE__));

spl_autoload_register(function($className) {
    // Using PSR-0 convention.
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
	include_once APPLICATION_PATH . DIRECTORY_SEPARATOR . $className . '.php';
});