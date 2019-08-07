<?php

spl_autoload_register(function($className) {
    // Using PSR-0 convention.
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
	include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . $className . '.php';
});