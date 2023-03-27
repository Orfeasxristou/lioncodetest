<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginUserRequest;
use Illuminate\Http\Request;
use App\Responses\HttpResponses;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    use HttpResponses;
//Register method with validation
public function register(UserRequest $request){

	$request->validated($request->all());

	$user=User::create([

	'name'=>$request->name,
	'email'=>$request->email,
	'password'=>Hash::make($request->password),
]);

	return $this->success([

		'user'=>$user,
	]);
    }


public function login(LoginUserRequest $request){

	$request->validated($request->all());
	if(!Auth::attempt($request->only(['email','password']))) {

		return $this->fail('','Email or Password are wrong',401);
	 }
	 $user=User::where('email', $request->email)->first();

return $this->success([


	'token'=>$user->createToken($user->name)->plainTextToken
	
]);

}
	

}