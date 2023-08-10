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
        $user = auth()->user();

        $categories = Category::where('user_id', $user->id)->get();
        return view('tasks.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        $data['is_done'] = $request->has('is_done') ? 1 : 0;

        if (!in_array(null, $data, true)) {
            Task::create($data);
            return redirect()->route('home')->with('success', 'Tarefa criada com sucesso.');
        }

        return redirect()->back()->with('error', 'Preencha todos os dados.');
    }

    public function edit(Request $request)
    {
        $user = auth()->user();
        $id = $request->id;
        $task = Task::find($id);
        $categories = Category::where('user_id', $user->id)->get();

        if (!$task) {
            return redirect()->route('home')->with('error', 'Tarefa com id inválido.');
        }

        return view('tasks.edit', ['task' => $task, 'categories' => $categories]);
    }

    public function update($id, Request $request)
    {
        $task = Task::find($id);
        if (!$task) {
            return redirect()->route('home')->with('error', 'Tarefa com id inválido.');
        }

        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        $data['is_done'] = $request->has('is_done') ? 1 : 0;

        $task->update($data);

        return redirect()->route('home')->with('success', 'Tarefa editada com sucesso.');
    }

    public function delete($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return redirect()->route('home')->with('error', 'Tarefa com id inválido.');
        }

        $task->delete();

        return redirect()->route('home')->with('success', 'Tarefa deletada com sucesso.');
    }
}
