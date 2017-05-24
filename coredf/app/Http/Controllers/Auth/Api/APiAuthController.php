<?php

namespace App\Http\Controllers\Auth\Api;


use App\Models\Shared\User;
use Illuminate\Http\Request;
use App\Mail\SendActivationToken;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Shared\UserFormRequest;
use Illuminate\Foundation\Auth\RegistersUsers;
#use App\Midigital\Repositories\Contracts\UserInterface as User;


class APiAuthController extends Controller
{

	use RegistersUsers;

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
    protected function register(UserFormRequest $request)
    {
        $data = [
        	'first_name'	=>$request->get('first_name'),
        	'last_name'		=>$request->get('last_name'),
        	'username'		=>$request->get('username'),
        	'email'			=>$request->get('email'),
        	'phone'			=>$request->get('phone'),
        	'password'		=>bcrypt($request->get('password')),
        	'dob'			=>$request->get('dob'),
        	'gender'		=>$request->get('gender'),
        	'company_uuid'	=>bcrypt('m2dl')
        ];

       	$user = User::create($data);
       	
     	return   $this->registered($user);



    }

    protected function registered($user){

    		auth()->logout();

    		return response()->json(['msg'=>'Your account was created successful, please check your email for activation'],201);
    }
}
