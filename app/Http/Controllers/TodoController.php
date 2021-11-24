<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
Use File;
Use Storage;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // query list of todos from DB 
        //$todos = Todo:: all();

        // $todos = Todo::paginate(2);

        $user = auth()->user();
        // // dd($user);
        $todos = $user->todos()->paginate(3);
       
        // retutn to view resources/views/todos/index.blade.php
        return view('todos.index',compact('todos'));
    }

    public function create()
    {
        // show create form
        return view('todos.create');

    }

    
    public function store(Request $request)
    {
        // store to todos table using model
            $todo = new Todo();
            $todo->title = $request->title;
            $todo->description = $request->description;
            $todo->user_id = auth()-> user()->id;
            $todo->save();

            if($request->hasFile('attachment')){
                // rename
            $filename = $todo->id.'_'.date("Y-m-d").'.'.$request->attachment->getClientOriginalExtension();
                Storage::disk('public')->put($filename, File::get($request->attachment));
                $todo->attachment = $filename;
                $todo->save();
                //store at file strorage
                //update row on DB
            }

        // return todos index
        return redirect()->to('/todos')->with([
                 'message' => 'Selesai simpan maklumat todo',
                 'type'=> 'alert-primary'
        ]);

    }

    public function show(Todo $todo)
    {
               return view('todos.show', compact('todo'));

    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Todo $todo, Request $request)
    {
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->attachment = $request->attachment;
        $todo->save();
        return redirect()->to('/todos')->with([
            'type'=> 'alert-success',
            'message' => 'Selesai update maklumat todo'
        ]);
    }

    public function delete(Todo $todo)
    {
        //delete from table using model
        //return to todos index

        if ($todo->attachment){
            Storage::disk('public')->delete($todo->attachment);
        }

        $todo->delete();
        return redirect()->to('/todos')->with([
            'type'=> 'alert-danger',
            'message' => 'Selesai delete maklumat todo'
        ]);

    }
}
