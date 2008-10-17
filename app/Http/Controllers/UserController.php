<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{
    //
    public function register(Request $request){



    	$data = $request->all();

    	 $validation = Validator::make($data,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender'=>['required'],
            'dob'=>['required']

        ]);

    	 if ($validation->fails()) {
    	 	
            return response()->json(['error'=>$validation->errors(),'status'=>1],200);
            
        }
        else{
        	//print_r($data); exit;
        	User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender'=>$data['gender'],
            'dob'=>date('y-m-d',strtotime($data['dob']))
        ]);
        	 return response()->json(['message'=>"user has been successfully register please login",'status'=>0],200);
        }
    	
    }
}
