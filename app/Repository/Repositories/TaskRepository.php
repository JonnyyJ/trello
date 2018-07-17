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

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update(array $attributes, $id)
    {
        $record=$this->find($id);
        return $record->update($attributes);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function show($id)
    {
        return $this->model-findOrFail($id);
    }


}

