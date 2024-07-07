<?php

namespace logic;

require_once __DIR__ . '/../model/ProjectDiscussion.php';
require_once __DIR__ . '/Response.php';

class ProjectDiscussion
{


    private \model\ProjectDiscussion $projectDiscussion;
    private Response $response;


    public function __construct()
    {
        $this->projectDiscussion = new \model\ProjectDiscussion();
        $this->response = new Response();
    }
    public function submitProjectDiscussion()
    {
        $data = $_POST;
        $errors = $this->validateProjectDiscussionForm($data);
        if (!empty($errors)) {
            $this->response->error($errors, 'Failed to submit Project Discussion');
            return;
        }

        $response = $this->projectDiscussion->submitProjectDiscussion($data);
        if ($response) {
            $this->response->success($response, 'Project Discussion submitted successfully');
        } else {
            $this->response->error('Failed to submit Project Discussion');
        }
    }

    private function validateProjectDiscussionForm(array $data): array
    {
        $errors = [];

        if (empty($data['fname'])) {
            $errors['fname'] = 'First name is required';
        }

        if (empty($data['email'])) {
            $errors['email'] = 'Email is required';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email format';
        }

        if (empty($data['address'])) {
            $errors['address'] = 'Address is required';
        }

        if (empty($data['phone'])) {
            $errors['phone'] = 'Phone number is required';
        }

        if (empty($data['category'])) {
            $errors['category'] = 'Category is required';
        }

        if (empty($data['project-description'])) {
            $errors['project-description'] = 'Project description is required';
        }

        if (empty($data['project-package'])) {
            $errors['project-package'] = 'Project package is required';
        }

        return $errors;
    }
}