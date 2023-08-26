<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->date && $request->date !== null){
            $dateFilter = $request->date;
        }else{
            $dateFilter = date('Y-m-d');
        }

        $date = Carbon::createFromDate($dateFilter);

        $dateNow = $date->format('d') . ' de '. ucfirst($date->translatedFormat('M'));
        $datePrev = $date->subDay()->format('Y-m-d');
        $dateNext = $date->addDay(2)->format('Y-m-d');

        $user = auth()->user();
        $tasks = Task::where('user_id',$user->id)
            ->whereDate('due_date', $dateFilter)
            ->with('category')
            ->get();

        return view('home', [
            'tasks' => $tasks,
            'user' => $user,
            'dateNow' => $dateNow,
            'datePrev' => $datePrev,
            'dateNext' => $dateNext
        ]);
    }

}
