<?php

namespace logic;

require_once __DIR__ . '/../model/Auth.php';
require_once __DIR__ . '/Response.php';
class Auth
{
    private \model\Auth $auth;
    private Response $response;

    public function __construct()
    {
        $this->auth = new \model\Auth();
        $this->response = new Response();
    }
    public function login()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $data = $_POST;
        $errors = $this->validateLoginForm($data);

        if (!empty($errors)) {
            $this->response->error($errors, 'Failed to login');
            return;
        }

        $redirectURL = $_SESSION['redirectURL'] ?? '/admin';

        $response = $this->auth->login($data);
        if ($response) {
            set_session('isAuthenticated', true);
            $this->response->success($redirectURL, 'Login successful');
        } else {
            set_session('isAuthenticated', false);
            $this->response->error('Invalid email or password');
        }
    }

    private function validateLoginForm($data): array
    {
        $errors = [];

        if (empty($data['email'])) {
            $errors['email'] = 'Email is required';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email format';
        }

        if (empty($data['password'])) {
            $errors['password'] = 'Password is required';
        }

        return $errors;
    }
}