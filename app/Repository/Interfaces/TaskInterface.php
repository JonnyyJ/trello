<?php
namespace App\Repository\Interfaces;

interface TaskInterface{

    public function all();

    public function create(task $task);

    public function update(task $task, $id);

    public function delete($id);

    public function show($id);

}