<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class OrderController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('title', 'desc')->get();        

        return view('order-index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }
    

}

