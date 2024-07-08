<?php

namespace logic;

require_once __DIR__ . '/../model/ContactUs.php';
require_once __DIR__ . '/Response.php';
class ContactUs
{
    private \model\ContactUs $contactUs;
    private Response $response;

    public function __construct()
    {
        $this->contactUs = new \model\ContactUs();
        $this->response = new Response();
    }


    public function submitContactUs()
    {
        $data = $_POST;
        $errors = $this->validateContactForm($data);

        if (!empty($errors)) {
            $this->response->error($errors, 'Failed to submit Contact Us');
            return;
        }

        $response = $this->contactUs->submitContactUs($data);
        if ($response) {
            $this->response->success($response, 'Contact Us submitted successfully');
        } else {
            $this->response->error('Failed to submit Contact Us');
        }
    }

    private function validateContactForm($data): array
    {
        $errors = [];


        if (empty($data['email'])) {
            $errors['email'] = 'Email is required';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email format';
        }

        if (empty($data['subject'])) {
            $errors['subject'] = 'Subject is required';
        }

        if (empty($data['message'])) {
            $errors['message'] = 'Message is required';
        }

        return $errors;
    }

    public function getAllContactUs()
    {
        $response = $this->contactUs->getAll();
        $this->response->success($response);
    }

}