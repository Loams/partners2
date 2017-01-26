<?php

namespace App\Http\Controllers\Auth;

use App\User;
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
            'group_id' => 'nullable|required_without:store_id',
            'store_id' => 'nullable|required_without:group_id',
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
        $user_data = [
            'gender' =>$data['gender'],
            'firstname' =>$data['firstname'],
            'lastname' => $data['lastname'],
            'function' =>$data['function'],
            'email' => $data['email'],
            'phone' =>$data['phone'],
            'password' => bcrypt($data['password']),
        ];
        
        if(isset($data['group_id']) && $data['group_id'] != '')
            $user_data['group_id'] = $data['group_id'];
        
        if(isset($data['store_id']) && $data['group_id'] != '')
            $user_data['store_id'] = $data['store_id']; 
        
        return User::create($user_data);
    }
}
