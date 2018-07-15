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
        return response()->json(Task::all()->toArray());
    }

    public function store(Request $request)
    {

       $task=$this->task->create();


        return response()->json([
            'status' => (bool) $task,
            'data'   => $task,
            'message' => $task ? 'Task Created!' : 'Error Creating Task'
        ]);
    }

    public function show(Task $task)
    {
        return response()->json($task);
    }

    public function update(Request $request, Task $task)
    {
        $status = $task->update(
            $request->only(['name', 'category_id', 'user_id', 'order'])
        );

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Task Updated!' : 'Error Updating Task'
        ]);
    }

    public function destroy(Task $task)
    {
        $status = $task->delete();

        return response()->json([
            'status' => $status,
            'message' => $status ? 'Task Deleted!' : 'Error Deleting Task'
        ]);
    }

}