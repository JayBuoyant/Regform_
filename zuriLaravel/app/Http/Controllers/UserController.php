<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    

    public function createUser(Request $request) 
    {
        
        //return $request->input(); 
        $user = new User;
        //$user->id=5;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->save();

        //auth()->login($user);
        //User::create((array) $request);

        return redirect('/')->with('success', "Account successfully registered.");
    }

    public function edituser(Request $request)
    {
        $user = new User;
        $user->id=$request->id;
        $currentuser = User::find($user->id);
        //return $currentuser;
        return view('edituser', ['currentuser'=>$currentuser]);
    }
}
