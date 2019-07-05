<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;



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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function userlogin(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'nicno' => $data['nicno'],
            'address' => $data['address'],
            'contactno' => $data['contactno'],
            'email' => $data['email'],
            'profilepic' => $data['profilepic'],
            'password' => bcrypt($data['password']),
            'admin'=> 0
        ]);
    }

   /* public function postLogin(array $request)
    {
        $this->validate($request, [
            'username' => 'required', 'password' => 'required',
        ]);
        if ($this->auth->validate(['username' => $request->username, 'password' => $request->password])) {
            return redirect($this->loginPath())
                ->withInput($request->only('username', 'remember'))
                ->withErrors('Your account is Inactive or not verified');
        }
        $credentials  = array('username' => $request->username, 'password' => $request->password);
        if ($this->auth->attempt($credentials, $request->has('remember'))){
                return redirect()->intended($this->redirectPath());
        }
        return redirect($this->loginPath())
            ->withInput($request->only('username', 'remember'))
            ->withErrors([
                'username' => 'Incorrect username or password',
            ]);
    }

    public function loginPath()
    {
        return '/home';
    }*/

    public function username()
    {
        return 'username';
    }

}

