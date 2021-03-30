<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Validator;

class AuthController extends Controller
{
    function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
           $user = Auth::user();
           $token = $user->createToken('App')->accessToken;

           $response = ['message' => 'Successfully login','token' => $token,'user' => $user];
           return response($response, 200);
        }else{
            $response = ['message' => 'Invalid email or password'];
            return response($response, 401);
        }
    }

    function register(Request $request){
        $validator = Validator::make($request->all(), 
                        [
                            'name' => 'required',
                            'email' => 'required|unique:users',
                            'password' => 'required|min:6|confirmed'
                        ]
                    );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ],400);
        $token = $user->createToken('App')->accessToken;
        if($user){
            $response = ['message' => 'Successfully login','token' => $token,'user' => $user];
            return response($response, 200);
        }else{
            $response = ['message' => 'Something went wrong!! try once more'];
            return response($response, 401);
        }
       
    }
}
