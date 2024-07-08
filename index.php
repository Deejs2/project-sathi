<?php

require_once __DIR__ . '/config/SessionConfig.php';

$router =  __DIR__ . '/Router.php';
require_once $router;

$router = new Router();

//include routes file
require_once __DIR__ . '/Routes.php';