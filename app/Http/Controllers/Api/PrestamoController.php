<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prestamo;

class PrestamoController extends Controller
{
    public function index(){
        $prestamos= Prestamo::all();
        return response()->json($prestamos, 201);

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
    public function GetDataById(request $request,$id){
        
        $consulta= 
        Prestamo::join('users','users.id','=','prestamos.user_id')
        ->join('libros','libros.id','=','prestamos.libro_id')
         ->where('prestamos.id',$id)
         ->first();
         return response()->json($consulta);
             
    }
    public function edit(request $request){
        $prestamo = Prestamo::findOrFail($request->id);
        return response()->json($prestamo);
    }
    public function delete(Request $request){
     
        $prestamo = Prestamo::findOrFail($request->id);
        $prestamo->delete();
        //return response()->json($data, 201);

     }
}
