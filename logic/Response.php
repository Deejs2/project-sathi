<?php

namespace logic;

class Response
{
    public function success($data, $message = 'success')
    {
        $response = [
            'status' => 'success',
            'data' => $data,
            'message' => $message
        ];
        header('Content-Type: application/json');
        http_response_code(200);
        echo json_encode($response);
    }

    public function error($errors, $message = 'Error occurred')
    {
        $response = [
            'status' => 'error',
            'message' => $message,
            'errors' => $errors
        ];
        header('Content-Type: application/json');
        http_response_code(400);
        echo json_encode($response);
    }

}