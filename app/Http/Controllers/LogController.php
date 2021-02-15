<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Laravel\Socialite\Facades\Socialite;

class LogController extends Controller
{
     public function showLoginForm()
    {
        return view('members.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
        'email' => 'required|email|max:255',
        'password' => 'required|max:255',
    ]);
        if (Auth::attempt(['email'=>$request->email,'password'=> $request->password])) {
            return redirect('members/successlogin')->with('Status','You are logged in');
        }
        return back()->withInput()->withErrors(['email' => 'Username or Password is invalid']);
        
    }
    public function successlogin()
{
    return view('members.successlogin'); 
}
  function logout()
  {
  	Auth::logout();
  	return redirect('/');
  }

}
