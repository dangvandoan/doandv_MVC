<?php

namespace doandv_MVC\Models;

use doandv_MVC\Models\TaskResource;

class TaskRepository
{
    protected $taskResource;
    public function __construct()
    {
        $this->taskResource = new TaskResource('tasks', 'taskID', new Task);
    }

    public function add($model)
    {
        return $this->taskResource->save($model);
    }

    public function update($model)
    {
        return $this->taskResource->save($model);
    }

    public function find($id)
    {
        return $this->taskResource->find($id);
    }

    public function getAll($model)
    {
        return $this->taskResource->all($model);
    }

    public function delete($model)
    {
        return $this->taskResource->delete($model);
    }
}
