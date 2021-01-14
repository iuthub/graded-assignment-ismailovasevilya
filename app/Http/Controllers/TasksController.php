<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function getTask(){
      return view('layouts.index',[
        'tasks' =>Task::all()
      ]);
    }

    public function postCreateTask(Request $req){
    	 $this->validate($req, [
            'newTask' => 'required|regex:/(\w.+\s).+/i'
        ]);

       $user = Auth::user();

      $task = new Task([
        'newTask' => $req->input('newTask') 
      ]);

      $user->tasks()->save($task);

      $task->save();
      return redirect()->route('layoutsIndex')->with([
            'info'=>'Successfully created! Post title is '. $req->input('newTask')
        ]);
    }

    

    public function deleteTask($id){
      Task::find($id)->delete();
      return redirect()->route('layoutsIndex');
    }

    public function getEditTask($id){
    	$task = Task::find($id);

    	return view('actions.edit',[
    		'task' => $task
    	]);
    }

    public function postEditTask(Request $req){
    	$task = Task::find($req->input('id'));
    	$task->newTask=$req->input('newTask');
    	$task->save();
    	
    	return redirect()->route('layoutsIndex');
    }
}