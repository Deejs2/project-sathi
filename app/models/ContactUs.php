<?php

namespace app\Models;

use core\BaseModel;

class ContactUs extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
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

    public function getAllContactUs()
    {
        return $this->getAll();
    }

}
