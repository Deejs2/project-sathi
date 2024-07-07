<?php

namespace model;

use config\Database;

class ProjectDiscussion extends BaseModel
{
    protected function getTableName(): string
    {
        return 'project_discussion';
    }

    public function submitProjectDiscussion($data)
    {
        var_dump($data);
//        return $this->save($data);
    }
}