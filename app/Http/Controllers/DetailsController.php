<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;


class DetailsController extends Controller

{
    public function show($id)
    {
        $task = Task::find($id);

        return view('task', [
            'tasks' => $task,
        ]);
    }
    public function delete($id)
        {
            $task = \App\Models\Task::find($id);
            $task -> delete();
            return view ('task-delete', [
                'id' => $id
            ]);
        }
}