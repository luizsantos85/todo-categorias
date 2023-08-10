<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $tasks = Task::where('user_id',$user->id)->with('category')->get();

        return view('home', ['tasks' => $tasks, 'user' => $user]);
    }

}
