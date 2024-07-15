<?php

namespace app\Controllers\Web;

use core\BaseController;
use core\Response;

class PageController extends BaseController {
    private $response;

    public function __construct() {
        $this->response = new Response();
    }
    public function landing() {
        $this->view('landing');
    }

    public function about() {
        $this->view('about');
    }

    public function services() {
        $this->view('services');
    }

    public function projectDiscussionForm() {
        $this->view('landing/project-discussion-form');
    }

    public function blog() {
        $this->view('blog');
    }

    public function contact() {
        $this->view('landing/contact');
    }

    public function login() {
        $this->view('auth/login');
    }

    public function dashboardHome() {
        $this->view('dashboard/home', [], 'dashboard');
    }

    public function dashboardContactUs() {
        $this->view('dashboard/contact', [], 'dashboard');
    }

    public function getAllContactUs() {
        try {
            // Simulate fetching data
            $data = ['test' => 'Test data'];
            $this->response->success($data, 'Test: Contact Us fetched successfully');
        } catch (\Exception $e) {
            $this->response->error('An error occurred: ' . $e->getMessage());
            http_response_code(500);
        }
    }
}
