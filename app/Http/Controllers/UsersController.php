<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{

    public function index(){
        $users = User::all();
        return view('Users.index')->with("user" , $users);
    }
    public function create(){
     return view("Users.create");
    }

    function store(Request $request){
        $request->validate([
            'name' => "required",
            'email' => 'required',
             'password'=> 'required'
               ]);
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $user = new User();
        $user->name = $data['name'];
        $user->password = $data['password'];
        $user->email = $data['email'];
        $user->tybe = $data['tybe'];
       
        $user->save();
        return redirect("/");
   }
   
}
