<?php namespace App\Repository\Repositories;

use App\Repository\Interfaces\TaskInterface;
use App\Task;
use App\Repository\Repositories\BaseRepository;



class TaskRepository extends BaseRepository implements TaskInterface
{
    protected $model;

    public function __construct(task $task)
    {
        $this->model=$task;
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }
}

