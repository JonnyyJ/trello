<?php

namespace App\Http\Controllers;

use App\Repository\Interfaces\TaskInterface;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{


    protected $task;
    /*constuct*/
    public function __construct(TaskInterface $task)
    {
        $this->task = $task;
    }

    public function index()
    {
        return $this->task->all();
    }

    public function store(Request $request)
    {

       $task=$this->task->create($request->all());


        return response()->json([
            'status' => (bool) $task,
            'data'   => $task,
            'message' => $task ? 'Task Created!' : 'Error Creating Task'
        ]);
    }

    public function show($id)
    {
        return $this->task->show($id);
    }

    public function update(Request $request, $id)
    {
        $this->task->update($request->only($this->task->getTask()->fillable), $id);

        return $this->task->find($id);
    }

    public function destroy($id)
    {
        return $this->task->delete($id);
    }

}