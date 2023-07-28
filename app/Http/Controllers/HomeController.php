<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id',1)->with('category')->get();


        return view('home', ['tasks' => $tasks]);
    }

}
