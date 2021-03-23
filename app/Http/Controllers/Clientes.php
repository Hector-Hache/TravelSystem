<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModeloUser;


class Clientes extends Controller
{
    public function listar(){
       $cli=ModeloUser::all();
       return view('clientes.lista', compact('cli'));
    }
    public function actualizar($id){
        $var = ModeloUser::findOrfail($id);
        return view('clientes.formularioactu', compact('var'));   
    }
    public function  actupost(Request $request, $id)
    {
        $category =ModeloUser::findOrfail($id);
        $category->name = $request->input('nombre');
        $category->email = $request->input('correo');
        $category->password = $request->input('contra');
        $category->save();
        return redirect()->route('actucliente');
    } 
     public function busca(){//retorna la vista o interactua con el modelo de datos
        return view('clientes.buscar');
    }
    
    public function retornobusqueda(Request $request){
        $nombre = $request->input('des');
        $bus=ModeloUser::where('name', '=', $nombre)->get(); 
        return view('rutas.resultado', compact('bus'));      
 }
}
