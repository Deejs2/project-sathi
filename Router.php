<?php

use logic\ProjectDiscussion;

class Router
{
    public function __construct()
    {
        $this->route();
    }

    public function route()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
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
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $uri = $_SERVER['REQUEST_URI'];

            if ($uri === '/submit-project-discussion') {
                require_once __DIR__ . '/logic/ProjectDiscussion.php';
                $projectDiscussion = new ProjectDiscussion();
                $projectDiscussion->submitProjectDiscussion();
                header('Location: /');
            }

        }
    }
}
