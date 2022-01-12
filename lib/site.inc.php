<?php

use Foundation\Objects\Site;

//need to include this for autoloading
require_once __DIR__ . '/../vendor/autoload.php';

//load the dotenv for using passwords
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . "/..");
$dotenv->load();

//Instantiate the site
$site = new Site();
$localize = require 'localize.inc.php';
if(is_callable($localize)) {
    $localize($site);
}

// Start the session system
session_start();
