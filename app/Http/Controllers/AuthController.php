<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\User;

use Illuminate\Http\Request;
use Laravel\Passport\Passport;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
       $filds= $request->validate(
            [
                'name'=>['required','string','max:55'],
                'phone'=>['required','string','unique:users'],
                'role'=>['required','in:costumer,Expert'],
                'password'=>['required','confirmed' ]
            ]
        );
        $user=User::query()->create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'role'=>$request->role,
            'password'=> bcrypt($request->password)
        ]);

        if(!$user){
             return response()->json([
                'message'=>'register faild'
             ]);
        }

        $token=$user->createToken('authToken')->accessToken;
       // return auth()->user()->createToken('authToken')->accesstoken;
        $user['remember_token']=$token;
        return response()->json([
        "message"=>"register created successfully",
        "token"=>$token,
        "user"=>$user
         ],200);

    }


    public function login(Request $request){

        if (!auth()->attempt($request->only('phone','password'))){
            return response()->json([
                "error"=>"  invaled login details"
             ],401);
        }
        $user=User::where('phone',$request['phone'])->firstOrFail();
         $token=$user->createToken('authToken');
         $user['remember_token']=$token;
        return response()->json([
               'message'=>" login successfully",
               'token'=>$token,
               'user'=>$user
        ],200);

    }

    public function logout()
    {
        $user= Auth::user()->token();
        $user->revoke();
        // 'user_id' => Auth::user()->id();

        return response()->json([
            'message' => 'successfully logged out'],200);

    }
}

