<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // query list of todos from DB 
        //$users = User:: all();
        $users = User::paginate(3);
        
        // retutn to view resources/views/todos/index.blade.php
        return view('users.index',compact('users'));

    }

    public function create()
    {
        // show create form
        return view('users.create');

    }

    public function store(Request $request)
    {
        // store to user table using model
            $user = new User();
            // $user->name= $request->name;
            // $user->email = $request->email;
            // $user->password = $request->password;

            $user->name= 'Hassan22';
            $user->email = 'asasas22';
            $user->password = '123345522';
            
            $user->save();

        // return todos index
        return redirect()->to('/users');

    }

    public function show(User $user)
    {
               return view('users.show', compact('user'));

    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->to('/users');
    }

    public function delete(User $user)
    {
        //delete from table using model
        //return to todos index
        $user->delete();
        return redirect()->to('/users');

    }
}
