<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class AuthController extends Controller
{
    public function showRegisterForm()
    {
    	return view('members.register');
    }

    public function register(Request $request)
    {
    	$this->validation($request);
        $request['password'] = bcrypt($request->password);
    	User::create($request->all());
    	return redirect('/')->with('Status','You are registered, login to continue');
    }

    public function validation($request)
    {
    	return $this->validate($request, [
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users|max:255',
        'password' => 'required|confirmed|max:255|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
    ]);

    }
}
