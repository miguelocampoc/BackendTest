<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return response()->json($users, 201);
    }
    public function show(Request $request){
       echo "Ddssd";

        
    }
    public function edit(Request $request){
        $user = User::findOrFail($request->id);
        return response()->json($user, 201);   
     }
     public function update(Request $request){
        $user = User::findOrFail($request->id);
        $data=[
            'name'=>$request->nombre,
            'apellidos'=>$request->apellidos,
             'email'=>$request->email,
             'direccion'=>$request->direccion,
             'contacto'=>$request->contacto,
             'cedula'=>$request->cedula,
             'password'=>bcrypt($request->password)

        ];
        $user->update($data);

     }
    public function store(Request $request){
        $data=[
            'name'=>$request->nombre,
            'apellidos'=>$request->apellidos,
             'email'=>$request->email,
             'direccion'=>$request->direccion,
             'contacto'=>$request->contacto,
             'cedula'=>$request->cedula,
             'password'=>bcrypt($request->password)

        ];
        User::create($data);
        //return response()->json($data, 201);

     }
     public function delete(Request $request){
     
        $user = User::findOrFail($request->id);
        $user->delete();
        //return response()->json($data, 201);

     }
}
