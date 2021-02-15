<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'members/successlogin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from twitter.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $githubUser = Socialite::driver('github')->user();
     
    $findUser = User::where('email',$githubUser->email)->first();

    if ($findUser)
    {
      Auth::login($findUser);
      return redirect($this->redirectTo)->with('Status','You are logged in');
  } 
  else 
  {
    $user = User::create([
       'email' => $githubUser->getEmail(),
       'name' => $githubUser->getName(),
       'provider_id' => $githubUser->getId(),


   ]);
      Auth::login($user, true);
      return redirect($this->redirectTo)->with('Status','You are logged in');
    
}
}
}
