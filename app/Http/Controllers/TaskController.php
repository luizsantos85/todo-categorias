<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function show()
    {
    }

    public function create()
    {
        // $user = User::where('id',1)->with('categories', 'tasks')->first();
        // $categories = $user->categories;
        $categories = Category::where('user_id',1)->get();
        return view('tasks.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = 1;

        if (!in_array(null, $data, true)) {
            Task::create($data);
            return redirect()->route('home')->with('success', 'Tarefa criada com sucesso.');
        }

        return redirect()->back()->with('error', 'Preencha todos os dados.');
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
