<?php namespace App\Http\Controllers;
use App\Task;
use Input;
use Redirect;
use Validator;

class AppController extends Controller {
    
    
 
    public function home(){
        $tasks = Task::all();
        return view('home', compact('tasks'));   
    }
    
    public function create(){
        return view('create');   
    }
    
    public function edit(Task $task){
        return view('edit', compact('task'));   
    }
    
    public function delete(Task $task){
        return view('delete', compact('task'));
    }
    
    public function saveCreate(){
        $input = Input::all();
        
        $rules = array(
            'title' => 'required',
            'body' => 'required'
        );
        
        $validator = Validator::make($input, $rules);
        
        if($validator->passes()){
            $task = new Task;
            $task->title = $input['title'];
            $task->body = $input['body'];
            $task->save();

            return Redirect::action('AppController@home');    
        }
        
        return Redirect::action('AppController@create');
    }
    
    public function doEdit(){
        $task = Task::findOrFail(Input::get('id'));   
        
        $task->title = Input::get('title');
        $task->body = Input::get('body');
        $task->done = Input::get('done');
        
        $task->save();
        
        return Redirect::action('AppController@home');
    }
    
    public function doDelete(){
        $task = Task::findOrFail(Input::get('id'));
        
        $task->delete();
        
        return Redirect::action('AppController@home');
    }
    
    public function show($id){
        
        $task = Task::findOrFail($id);
        
        
        return view('show', compact('task'));
    }
    
    public function resume(){
        return view('resume');   
    }
}