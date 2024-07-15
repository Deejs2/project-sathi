<?php

namespace app\Controllers\Api;

use app\Models\ContactUs;
use core\BaseController;
use core\Request;
use core\Response;
use core\Validator;
use Exception;

class ContactUsController extends BaseController {
    private Response $response;
    private Request $request;
    private ContactUs $contactUs;

    public function __construct() {
        $this->response = new Response();
        $this->request = Request::capture();
        $this->contactUs = new ContactUs();
    }

    public function submitContactUs() {
        try {
            $data = $this->request->all();
            $validator = new Validator();
            $errors = $validator->validate($data, [
                'email' => ['required', 'email'],
                'subject' => ['required', 'min:3', 'max:100'],
                'message' => ['required', 'min:10']
            ]);

            if (count($errors) > 0) {
                $this->response->error($errors);
                http_response_code(400);
                return;
            }

            $this->contactUs->submitContactUs($data);
            $this->response->success([$data], 'Contact Us submitted successfully');
        } catch (Exception $e) {
            $this->response->error('An error occurred: ' . $e->getMessage());
            http_response_code(500);
        }
    }

    public function getAllContactUs() {
        try {
            $data = $this->contactUs->getAllContactUs();
            $this->response->success($data, 'Contact Us retrieved successfully');
        } catch (Exception $e) {
            $this->response->error('An error occurred: ' . $e->getMessage());
            http_response_code(500);
        }
    }
}
