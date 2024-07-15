<?php

namespace app\Models;

use core\BaseModel;

class ProjectDiscussion extends BaseModel
{

    protected function getTableName(): string
    {
        return 'project_discussions';
    }

    public function submitProjectDiscussion(array $data) {
        $data = [
            'fname' => filter_var($data['fname'], FILTER_SANITIZE_STRING),
            'email' => filter_var($data['email'], FILTER_SANITIZE_EMAIL),
            'phone' => filter_var($data['phone'], FILTER_SANITIZE_STRING),
            'address' => filter_var($data['address'], FILTER_SANITIZE_STRING),
            'category' => filter_var($data['category'], FILTER_SANITIZE_STRING),
            'project_description' => filter_var($data['project-description'], FILTER_SANITIZE_STRING),
            'project_package' => filter_var($data['project-package'], FILTER_SANITIZE_STRING),
        ];
        return $this->save($data);
    }
}