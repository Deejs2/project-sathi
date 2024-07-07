<?php

namespace logic;

class ProjectDiscussion
{


    private  $projectDiscussion;

    public function __construct()
    {
        $this->projectDiscussion = __DIR__ . '/model/ProjectDiscussion.php';
    }
    public function submitProjectDiscussion()
    {
        $_SESSION['message'] = $_POST;
    }
}