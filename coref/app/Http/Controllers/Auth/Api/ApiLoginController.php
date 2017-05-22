<?php

namespace App\Http\Controllers\Auth\Api;


use JWTAuth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Midigital\Repositories\Contracts\UserInterface as User;
class ApiLoginController extends Controller
{
	protected $user;

	public function __construct(User $user){
		$this->user = $user;
	}

    public function login(Request $request){
    	$this->validate($request,[
    		'email' =>'required|email',
    		'password'=>'required'
    	]);

    	$credentials = $request->only('email','password');

    	try{
    		if (!$token = JWTAuth::attempt($credentials)){
    			return response()->json(['error'=>'Invalid Credentials'],401);
    		}

    	} catch (JWTException $e) {
    		return response()->json(['error'=>'Could not create a token'],500);
    	}
        $user = auth()->user();  
        
    	return response()->json(['token'=>$token,'user'=>$user],201);
    }
}
