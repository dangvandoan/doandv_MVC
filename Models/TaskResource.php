<?php

namespace doandv_MVC\Models;

use doandv_MVC\Core\Resource;
use doandv_MVC\Models\Task;

class TaskResource extends Resource
{
    public function __construct($table, $id, Task $task)
    {
        parent::_init($table, $id, $task);
    }
}
