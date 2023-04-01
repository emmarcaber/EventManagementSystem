<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view ('tasks.index')->with('tasks', $tasks);
    }

    public function create()
    {
        return view('tasks.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Task::create($input);
        return redirect('task')->with('flash_message', 'Task Addedd!');
    }

    public function show(string $id)
    {
        $task = Task::find($id);
        return view('tasks.show')->with('tasks', $task);
    }

    public function edit(string $id)
    {
        $task = Task::find($id);
        return view('tasks.edit')->with('tasks', $task);
    }

    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        $input = $request->all();
        $task->update($input);
        return redirect('task')->with('flash_message', 'Task Updated!');
    }


    public function destroy(string $id)
    {
        Task::destroy($id);
        return redirect('task')->with('flash_message', 'Task deleted!');
    }
}
