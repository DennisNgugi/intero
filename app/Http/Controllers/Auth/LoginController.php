<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Str;
use Hash;
use Socialite;
use App\User;
use Auth;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function socialProviderLogin($service){
      // send the user's request to github
      if($service == 'twitter'){
        return Socialite::driver($service)->redirect();
      }
      else{
        return Socialite::driver($service)->stateless()->redirect();
      }

    }

    public function socialProviderRedirect($service){
      // get oauth request back from github to authenticate user
      if($service == 'twitter'){
        $user = Socialite::driver($service)->user();
      }
      else{
        $user = Socialite::driver($service)->stateless()->user();
      }


        // if the user doesnt exist add them
        // if they do get the model
        $user = User::firstOrCreate([
          'email' => $user->email
        ],
        [
          'name' => $user->name,
          'name_slug'=>str_slug($user->name),
          'password'=>Hash::make(Str::random(24))
        ]);

        Auth::login($user,true);

        return redirect('/');
    }
}
