<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Usuario;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function showLogin(){
        return view ('auth.login');
    }

    public function login(Request $request){

        $correo = $request->input('correo');
        $password = $request->input('password');

        $user = Usuario::where('correo', $correo)->first();

        if($user != null && Hash::check($password, $user->password))
        {
            Auth::login($user);
            return redirect('/dashboard');
        }
        else
        {
            return redirect('login')->withInput();
        }


    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }

}
