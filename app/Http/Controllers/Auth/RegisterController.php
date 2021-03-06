<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Partner;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'gender' => 'required',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'function' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'partners_id' => 'required',
            'phone' => 'min:10|max:10|required',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = [
            'gender' =>$data['gender'],
            'firstname' =>$data['firstname'],
            'lastname' => $data['lastname'],
            'function' =>$data['function'],
            'email' => $data['email'],
            'phone' =>$data['phone'],
            'password' => bcrypt($data['password']),
            'partners_id' => $data['partners_id']
        ];
        return User::create($user);
    }
    
    /**
     * override showRegistrationForm()
     * to add partners
     * @return register view
     */
    public function showRegistrationForm()
    {
        $partners = Partner::pluck('name', 'id');
        $partners->prepend('None','');
        return view('auth.register', compact('partners'));
    }
}
