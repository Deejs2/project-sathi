<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';

use core\Router;

// Initialize the Router for web routes
$router = Router::getInstance();
//require_once __DIR__ . '/../routes/web.php';

require_once __DIR__ . '/../routes/api.php';