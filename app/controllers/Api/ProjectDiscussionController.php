<?php

namespace app\Controllers\Api;

use app\Models\ProjectDiscussion;
use core\BaseController;
use core\Request;
use core\Response;
use core\Validator;
use Exception;

class ProjectDiscussionController extends BaseController
{

    private Response $response;
    private Request $request;
    private ProjectDiscussion $projectDiscussion;

    public function __construct() {
        $this->response = new Response();
        $this->request = Request::capture();
        $this->projectDiscussion = new ProjectDiscussion();
    }

    public function submitProjectDiscussions() {
        try {
            $data = $this->request->all();
            $validator = new Validator();
            $errors = $validator->validate($data, [
                'fname' => ['required', 'min:3', 'max:100'],
                'email' => ['required', 'email'],
                'phone' => ['required', 'min:10'],
                'address' => ['required', 'min:10'],
                'category' => ['required', 'min:3'],
                'project-description' => ['required', 'min:10'],
                'project-package' => ['required', 'min:3'],
            ]);

            if (count($errors) > 0) {
                $this->response->error($errors);
                http_response_code(400);
                return;
            }

            $projectDiscussion = $this->projectDiscussion->submitProjectDiscussion($data);
            $this->response->success([$projectDiscussion], 'Contact Us submitted successfully');
        } catch (Exception $e) {
            $this->response->error('An error occurred: ' . $e->getMessage());
            http_response_code(500);
        }
    }

    public function getAllProjectDiscussions() {
        try {
            $data = $this->projectDiscussion->getAll();
            $this->response->success($data, ' Project Discussions retrieved successfully');
        } catch (Exception $e) {
            $this->response->error('An error occurred: ' . $e->getMessage());
            http_response_code(500);
        }
    }
}