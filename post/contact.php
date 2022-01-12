<?php

require_once '../lib/site.inc.php';

use Foundation\Controllers\ContactController;

$controller = new ContactController($site, $_SESSION, $_POST);
header("location: " . $controller->getRedirect());
