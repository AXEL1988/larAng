<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    function index(){
        return Task::all();
    }

    function show($id){
        return Task::find($id);
    }

    function store(Request $request){
        return Task::create($request->all());
    }

    function update(Request $request, $id){

        $task = Task::findOrFail($id);
        $task->update($request->all());

        return $task;

    }

    function delete(Request $request, $id){

        $task = Task::findOrFail($id);
        $task->delete();

        return 204;
    }

    
}
