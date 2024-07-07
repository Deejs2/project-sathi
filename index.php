<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$router =  __DIR__ . '/Router.php';
require_once $router;

$router = new Router();

//include routes file
require_once __DIR__ . '/Routes.php';