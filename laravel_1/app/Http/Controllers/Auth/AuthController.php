<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Session;

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
	
	private $redirectTo = '/home';
	protected $loginPath = '/home';	

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    //protected $redirectPath = '/sp';
	//protected $loginPath = '/sp';	

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
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
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
	
	
	public function getLogout(){
		Session::flush(); 
		return redirect('reg');
	}
	
	public function getRegister(){
		
		echo "User Defined function inside hi auth controller / getRegister";exit;
		
	}
}
