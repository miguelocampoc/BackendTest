<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(request $request){
        $email= $request->username;
        $password= $request->password;
        $user=   User::where('email',$email)->first();
        $check= Hash::check($request->password,$user->password);
          if($check){
            return response()->json($user, 200);       
        }
          return response()->json("",404);

    }
}
