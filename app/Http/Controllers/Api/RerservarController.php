<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Prestamo;

class RerservarController extends Controller
{
    public function list(request $request,$id){
       $reservas= Prestamo::where('user_id',$id)->get();
        return response()->json($reservas, 201);

    }
    public function store(request $request){
        $data=[
            "user_id"=> $request->user_id,
             "libro_id"=>$request->libro_id,
             "fi"=> date('d-m-Y h:i:s '),
             "fa"=>date('d-m-Y h:i:s '),
             "expiracion"=>$request->expiracion,
   

        ];
        Prestamo::create($data);
    }
    public function update(request $request){
        $prestamo = Prestamo::findOrFail($request->id);
        $prestamo->user_id=$request->user_id;
        $prestamo->libro_id=$request->libro_id;
        $prestamo->fa=date('d-m-Y h:i:s ');
        $prestamo->expiracion=$request->expiracion;
        $prestamo->save();
    }
    public function edit(request $request){
        $prestamo = Prestamo::where('user_id', '=', $request->user_id)->firstOrFail();
        return response()->json($prestamo);
    }
    public function delete(Request $request){
     
        $prestamo = Prestamo::findOrFail($request->id);
        $prestamo->delete();
        //return response()->json($data, 201);

     }

}
