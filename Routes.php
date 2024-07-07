<?php

use logic\ContactUs;
use logic\ProjectDiscussion;

$router = new Router();

require_once __DIR__ . '/logic/ProjectDiscussion.php';
require_once __DIR__ . '/logic/ContactUs.php';

$router->get('/', function() {
    include_once __DIR__ . '/view/landing.php';
});

$router->get('', function() {
    include_once __DIR__ . '/view/landing.php';
});

$router->get('/about', function() {
    include_once __DIR__ . '/view/about.php';
});

$router->get('/services', function() {
    include_once __DIR__ . '/view/services.php';
});

$router->get('/discuss-project', function() {
    include_once __DIR__ . '/view/project-discussion-form.php';
});

$router->get('/blog', function() {
    include_once __DIR__ . '/view/blog.php';
});

$router->get('/contact', function() {
    include_once __DIR__ . '/view/contact.php';
});








$router->post('/submit-project-discussion', function() {
    $projectDiscussion = new ProjectDiscussion();
    $projectDiscussion->submitProjectDiscussion();
});

$router->post('/submit-contact-us', function() {
    $contactUs = new ContactUs();
    $contactUs->submitContactUs();
});

$router->get('/get-contact-us', function() {
    $contactUs = new ContactUs();
    $contactUs->getAllContactUs();
});


$router->resolve();