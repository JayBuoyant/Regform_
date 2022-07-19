<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function showUserCreatepage()
    {
        return view('user.profile');
    }

    public function createUser(Request $request) 
    {
        
       //return $request->input(); 
        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->save();

        //auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}
