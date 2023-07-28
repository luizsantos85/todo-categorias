<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function show()
    {
    }

    public function create(Request $request)
    {
        return view('tasks.create');
    }

    public function edit($id)
    {
        return view('tasks.edit');
    }

    public function delete($id)
    {
        return redirect()->route('home');
    }


}
