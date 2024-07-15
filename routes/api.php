<?php

use app\Controllers\Api\ContactUsController;
use app\Controllers\Api\ProjectDiscussionController;
use app\Controllers\Web\PageController;
use core\Router;

$router = Router::getInstance();

//contact us routes
$router->group('/api/contact-us', function($router) {
    $router->post('/submit-contact-us', [ContactUsController::class, 'submitContactUs']);
    $router->get('/get-contact-us', [ContactUsController::class, 'getAllContactUs']);
});

//project discussion routes
$router->group('/api/project-discussion', function($router) {
    $router->post('/submit-project-discussion', [ProjectDiscussionController::class, 'submitProjectDiscussions']);
    $router->get('/get-project-discussion', [ProjectDiscussionController::class, 'getAllProjectDiscussions']);
});


//web routes
$router->get('/', [PageController::class, 'landing']);
$router->get('/about', [PageController::class, 'about']);
$router->get('/services', [PageController::class, 'services']);
$router->get('/discuss-project', [PageController::class, 'projectDiscussionForm']);
$router->get('/blog', [PageController::class, 'blog']);
$router->get('/contact', [PageController::class, 'contact']);
$router->get('/auth', [PageController::class, 'login']);

// Dashboard routes
$router->group('/admin', function($router) {
    $router->get('', [PageController::class, 'dashboardHome']);
    $router->get('/dashboard', [PageController::class, 'dashboardHome']);
    $router->get('/projects', [PageController::class, 'dashboardProjects']);
    $router->get('/contact', [PageController::class, 'dashboardContactUs']);
    $router->get('/project-discussion', [PageController::class, 'dashboardProjectDiscussions']);
});

try {
    $router->resolve();
} catch (Exception $e) {
    error_log($e->getMessage());
    http_response_code(500);
    include_once __DIR__ . '/../app/Views/errors/500.php';
}