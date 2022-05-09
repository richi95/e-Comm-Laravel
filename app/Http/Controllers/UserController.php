<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return "Username or password is not matched";
        }
        else
        {
            $req->session()->put('user', $user);
            return redirect('/');
        } 
    }
    function logout()
    {
        Session::remove('user');
        return redirect('login');
    }
    function signUp(UserRequest $request){
  
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect()->back()->with('message', [
            'type' => 'success',
            'content' => 'Successful registration'
        ]);
    }
}
