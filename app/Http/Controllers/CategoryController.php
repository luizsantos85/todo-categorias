<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        $user = auth()->user();

        return view('categories.create');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        // $data = $request->except('_token');
        // $data['is_done'] = $request->has('is_done') ? 1 : 0;

        // $task = $user->tasks()->create($data);

        // if ($task) {
        //     return redirect()->route('home')
        //     ->with('success', 'Tarefa criada com sucesso.');
        // }

        // return redirect()->back()
        //     ->with('error', 'Preencha todos os dados.');
    }

    public function edit(Request $request)
    {
        $user = auth()->user()->load('categories');
        // $id = $request->id;
        // $categories = $user->categories;
        // $task = Task::find($id);

        // if (!$task) {
        //     return redirect()->route('home')
        //     ->with('error', 'Tarefa com id inválido.');
        // }

        // return view('categories.edit', ['task' => $task, 'categories' => $categories]);
    }

    public function update($id, Request $request)
    {
        $user = auth()->user();
        // $task = $user->tasks()->find($id);

        // if (!$task) {
        //     return redirect()->route('home')
        //     ->with('error', 'Tarefa com id inválido.');
        // }

        // $data = $request->except('_token');
        // $data['user_id'] = $user->id;
        // $data['is_done'] = $request->has('is_done') ? 1 : 0;

        // $task->update($data);

        // return redirect()->route('home')
        // ->with('success', 'Tarefa editada com sucesso.');
    }

    public function delete($id)
    {
        $user = auth()->user();
        // $task = $user->tasks()->find($id);

        // if (!$task) {
        //     return redirect()->route('home')
        //     ->with('error', 'Tarefa com id inválido.');
        // }

        // $task->delete();

        // return redirect()->route('home')
        // ->with('success', 'Tarefa deletada com sucesso.');
    }
}
