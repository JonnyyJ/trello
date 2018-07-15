<?php namespace App\Repository\Repositories;

use App\Repository\Interfaces\TaskInterface;
use App\Task;



class TaskRepository implements TaskInterface
{
    protected $task;

    public function __construct(task $task)
    {

    }
}

