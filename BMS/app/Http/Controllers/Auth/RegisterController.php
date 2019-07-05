<?php

namespace App\Http\Controllers\Auth;
use Hash;
use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:20|unique:users',
            'name' => 'required|string|max:255',
            'nicno' => 'required|string|max:12|min:10|regex:/^[0-9]{9}[Vv]$/',
            'address' => 'required|string|max:255',
            'contactno' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);
    }

    protected function messages()
    {
        return ['custom'=>array('password'=>array('regex' => 'Your password must be more than 6 characters long, should contain at-least 1 Uppercase,
        1 Lowercase,1 Numeric and 1 special character'))];
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $is_admin=0;
        if(Auth::check()){
            $is_admin= 1;
        }else{
        $is_admin=0;
        }
        
        $user=User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'nicno' => $data['nicno'],
            'address' => $data['address'],
            'contactno' => $data['contactno'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'admin'=> $is_admin
        ]);

        if($is_admin==0)
        {

            Mail::send('welcomeOwner', $data, function($message) use ($data)
            {
                $message->from('sahand.herath@gmail.com', "Boarding Management System");
                $message->subject("Welcome to Boarding Management System");
                $message->to($data['email']);
            });

        }

        if($is_admin==1)
        {

            Mail::send('welcomeAdmin', $data, function($message) use ($data)
            {
                $message->from('sahand.herath@gmail.com', "Boarding Management System");
                $message->subject("Welcome to Boarding Management System");
                $message->to($data['email']);
            });

        }
        return $user;

        
        
        

        
    }


   
}
