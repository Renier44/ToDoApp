<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;




class TaskController extends Controller
{
    public function index(){
        return view ('task.index');

    }

    public function create(){
        return view ('task.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'completed' => 'required'
        ]);
    
        $newTask = Task::create($data); // Note the capitalization of "Task"
    
        return redirect(route('task.index'));
    }
    

    
}
