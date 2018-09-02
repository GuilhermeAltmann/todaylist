<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $today = new \DateTime();

        $format = '%d/%m/%Y';
        $date = $request->get('date');
        $dateSearch = $date;

        if(is_null($date)){

            $format = '%Y-%m-%d';
            $dateSearch = $today->format('Y-m-d');
            $date = '';
        }

        $tasks = Task::whereRaw("DATE_FORMAT(created_at, '{$format}') = '{$dateSearch}'")
            ->where('user_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->orderBy('date_finished', 'desc')
            ->get();

        return view('index', [
            'tasks' => $tasks,
            'date' => $date
        ]);
    }

    public function store(Request $request)
    {

        $taskValue = $request->post('task');

        $task = new Task();
        $task->user_id = Auth::user()->id;
        $task->task = $taskValue;
        $task->save();
    }
}
