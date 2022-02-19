<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Libro;

use Illuminate\Http\Request;


class librosController extends Controller
{
    public function index(){
        $libros= Libro::all();
        return response()->json($libros, 201);

    }
    public function store(request $request){

        $data=[
            "titulo"=> $request->titulo,
             "autor"=>$request->autor,
             "edicion"=>$request->edicion,
             "editorial"=>$request->editorial,
             "isbn"=>$request->isbn,
             "fe_pu"=>$request->fe_pu,
        ];
        Libro::create($data);
    }
    public function update(request $request){
        $libro = Libro::findOrFail($request->id);
        $libro->update($request->all());

    }
    public function edit(request $request){
        $libro = Libro::findOrFail($request->id);
        return response()->json($libro);
    }
    public function delete(Request $request){
     
        $libro = Libro::findOrFail($request->id);
        $libro->delete();
        //return response()->json($data, 201);

     }
}
