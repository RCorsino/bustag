<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/login';

    protected $loginPath = '/login';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'adminname' => 'required|max:255',
            'adminposition' => 'required|max:255|exists:admintbl,admin_position',
            'adminemail' => 'required|email|max:255|unique:adminreg',
            'password' => 'required|confirmed|min:6',
            'adminbirthdate' => 'required|date|max:255',
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
        return User::create([
            'adminname' => $data['adminname'],
            'adminposition' => $data['adminposition'],
            'adminemail' => $data['adminemail'],
            'password' => bcrypt($data['password']),
            'adminbirthdate' => $data['adminbirthdate'],
        ]);
    }
}
