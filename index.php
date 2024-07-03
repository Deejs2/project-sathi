<?php

switch ($_GET['page']) {
    case '':
    case 'landing':
        include "view/landing.php";
        break;
    case 'about':
        include "view/about.php";
        break;
    case 'contact':
        include "view/contact.php";
        break;
    case 'blog':
        include "view/blog.php";
        break;
    case 'discuss-project':
        include "view/project-discussion-form.php";
        break;
    default:
        include "view/404.php";
        break;
}