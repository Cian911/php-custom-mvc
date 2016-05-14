<?php

define('BASE', dirname(realpath(__FILE__)));

# Configuration
require_once BASE . '/config/config.php';

// Using autloader, add necessary files for function
function __autoload($class){
	require_once BASE . "/libs/$class.php";
}

$init = new Init();