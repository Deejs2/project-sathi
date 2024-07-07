<?php

namespace model;

require_once __DIR__ . '/BaseModel.php';

use config\Database;

class ProjectDiscussion extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $columns = "id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                fname VARCHAR(255) NOT NULL, 
                email VARCHAR(255) NOT NULL, 
                address VARCHAR(255) NOT NULL, 
                phone VARCHAR(255) NOT NULL, 
                category VARCHAR(255) NOT NULL, 
                project_description TEXT NOT NULL, 
                additional_message TEXT NOT NULL, 
                project_package VARCHAR(255) NOT NULL";
        $this->createTable($columns);
    }
    protected function getTableName(): string
    {
        return 'project_discussions';
    }

    public function submitProjectDiscussion($data)
    {
        $sanitizedData = [
            'fname' => filter_var($data['fname'], FILTER_SANITIZE_STRING),
            'email' => filter_var($data['email'], FILTER_SANITIZE_EMAIL),
            'address' => filter_var($data['address'], FILTER_SANITIZE_STRING),
            'phone' => filter_var($data['phone'], FILTER_SANITIZE_NUMBER_INT),
            'category' => filter_var($data['category'], FILTER_SANITIZE_STRING),
            'project_description' => filter_var($data['project-description'], FILTER_SANITIZE_STRING),
            'additional_message' => filter_var($data['additional-message'], FILTER_SANITIZE_STRING),
            'project_package' => filter_var($data['project-package'], FILTER_SANITIZE_STRING),
        ];
        return $this->save($sanitizedData);
    }
}