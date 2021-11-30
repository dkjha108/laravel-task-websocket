<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTask;
use App\Models\Task;
use App\Events\SubmitTaskEvent;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('welcome',compact('tasks'));
    }
    public function store(StoreTask $request)
    {
        $data = $request->all();
        Task::create($data);
        event(new SubmitTaskEvent());
        return redirect()->back();
    }

    public function taskListing()
    {
        $tasks = Task::all();
        return view('tasks-listing',compact('tasks'));
    }
}
