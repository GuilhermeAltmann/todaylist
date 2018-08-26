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
    public function index()
    {
        return view('index');
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
