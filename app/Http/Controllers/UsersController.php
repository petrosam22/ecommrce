<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    public function create(){
     return view("Users.create");
    }

    function store(Request $request){
        $data = $request->all();
        $data['password'] = \Hash::make($request->password);
        $user = new User();
        $user->name = $data['name'];
        $user->password = $data['password'];
        $user->email = $data['email'];
        $user->tybe = $data['tybe'];
       
        $user->save();
        return redirect("/");
   }
}
