<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaksStoreUpdateFormRequest;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $categories = $user->categories;

        return view('tasks.create', ['categories' => $categories]);
    }

    public function store(TaksStoreUpdateFormRequest $request)
    {
        $data = $request->except('_token');
        $user = auth()->user();
        $data['is_done'] = $request->has('is_done') ? 1 : 0;

        $task = $user->tasks()->create($data);

        if ($task) {
            return redirect()->route('home')
                ->with('success', 'Tarefa criada com sucesso.');
        }

        return redirect()->back()
            ->with('error', 'Preencha todos os dados.');
    }

    public function edit(Request $request)
    {
        $user = auth()->user()->load('categories');
        $id = $request->id;
        $categories = $user->categories;
        $task = Task::find($id);

        if (!$task) {
            return redirect()->route('home')
                ->with('error', 'Tarefa com id inválido.');
        }

        return view('tasks.edit', ['task' => $task, 'categories' => $categories]);
    }

    public function update($id, TaksStoreUpdateFormRequest $request)
    {
        $user = auth()->user();
        $task = $user->tasks()->find($id);

        if (!$task) {
            return redirect()->route('home')
                ->with('error', 'Tarefa com id inválido.');
        }

        $data = $request->except('_token');
        $data['user_id'] = $user->id;
        $data['is_done'] = $request->has('is_done') ? 1 : 0;

        $task->update($data);

        return redirect()->route('home')
            ->with('success', 'Tarefa editada com sucesso.');
    }

    public function updateStatus($id, Request $request)
    {
        $user = auth()->user();
        $task = $user->tasks()->find($id);

        if (!$task) {
            return response()->json(['error', 'Tarefa com id inválido.']);
        }

        $data = $request->except('_token');
        $data['user_id'] = $user->id;
        $data['is_done'] = $request->is_done;

        $task->update($data);
        return response()->json(['success' => true]);
    }



    public function delete($id)
    {
        $user = auth()->user();
        $task = $user->tasks()->find($id);

        if (!$task) {
            return redirect()->route('home')
                ->with('error', 'Tarefa com id inválido.');
        }

        $task->delete();

        return redirect()->route('home')
            ->with('success', 'Tarefa deletada com sucesso.');
    }
}
