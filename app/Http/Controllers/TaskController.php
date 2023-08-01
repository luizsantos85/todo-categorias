<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function show()
    {
    }

    public function create(Request $request)
    {
        $user = User::where('id',1)->with('categories', 'tasks')->first();
        $categories = $user->categories;
        return view('tasks.create', ['categories' => $categories]);
    }

    public function edit(Request $request)
    {
        $id = $request->query('id');
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function delete($id)
    {
        return redirect()->route('home');
    }


}
