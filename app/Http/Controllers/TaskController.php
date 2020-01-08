<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){
        return view('indexTask');
    }
    public function create(){
            return view('newTask');
    }
    public function store(){
            $description=request("description");
            $title = request()->title;
            //dd($description);
            // store to db
            $task_model = new \App\Task();
            $task_model->title=$title;
            $task_model->description=$description;
            $task_model->save();
            // show Success message
            echo "OK";
    }
    public function edit(){
        $id=request("id");
        //$tasks= \App\Task::get();
        $tasks= \App\Task::where('id','=', $id)->get();
        //dd($tasks->first()->title);
        $task=$tasks->first();
        return view('editTask',['task'=>$task]);
    }

    public function update(){
        //find
        $id=request("task_id");
        $tasks=\App\Task::where('id', '=', $id)->get();
        $task=($tasks->first());
        // update
        $task->description=request("description");
        $task->title=request("title");
        $task->is_done=request("is_done");
        $task->save();
        //success
        return redirect("/");
    }
    public function delete(){
        //find
        $id=request("task_id");
        $tasks=\App\Task::where('id', '=', $id)->get();
        $task=($tasks->first());
        // delete
        $task->delete();
        return redirect('/');
    }
}
