<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function Login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to authenticate the user
        if(auth()->attempt($request->only('email', 'password'))){
            // Authentication successful
            return response()->json([
                'message' => 'Login successful',
            ]);
        }

        // Authentication failed
        return response()->json([
            'message' => 'Invalid email or password'
        ], 401);
    }

    public function Register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return response()->json([
            'message' => 'User created successfully'
        ]);
    }

    public function Logout(){
        echo "Logout";
    }


}
