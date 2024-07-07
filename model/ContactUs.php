<?php

namespace model;

require_once __DIR__ . '/BaseModel.php';

class ContactUs extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $columns = "id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                email VARCHAR(255) NOT NULL, 
                subject VARCHAR(255) NOT NULL, 
                message TEXT NOT NULL";
        $this->createTable($columns);
    }

    protected function getTableName(): string
    {
        return 'contact_us';
    }

    public function submitContactUs($data)
    {
        $data = [
            'email' => filter_var($data['email'], FILTER_SANITIZE_EMAIL),
            'subject' => filter_var($data['subject'], FILTER_SANITIZE_STRING),
            'message' => filter_var($data['message'], FILTER_SANITIZE_STRING)
        ];
        return $this->save($data);
    }

}