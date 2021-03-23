<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModeloRutas;

class Rutas extends Controller
{
        public function index(){
            //consulta a traves de modelo 
            $ruta = ModeloRutas::all();
             return view('rutas.ruta', ['ruta' => $ruta]);   
         }
         public function formato(){
            $m='Siga el ejemplo';
            $name ='hola';
            $bus=DB::table('ruta')
            ->where('id', '=', '5')->get();
            return view('rutas.busqueda', compact('bus'));
        }

         public function registro(Request $request)
         {
        // Registro de una ruta en la base de datos a traves del Modelo
            $category = new ModeloRutas();
            $category->origen = $request->input('origenform');
            $category->destino = $request->input('destinoform');
            $category->precio = $request->input('precioform');
            $category->save();
            return redirect()->route('rut');
       } 
      public function formactu($id){
                $var = ModeloRutas::findOrfail($id);
                return view('rutas.formulario', compact('var'));   
            }
            
       public function actualizar(Request $request, $id)
            {
                $category = ModeloRutas::findOrfail($id);
                $category->origen = $request->input('origenAct');
                $category->destino = $request->input('destinoAct');
                $category->precio = $request->input('precioAct');
                $category->save();
                return redirect()->route('rut');
         } 

         public function busqueda(Request $request){
               $nombre = $request->input('des');
                $bus=ModeloRutas::where('destino', '=', $nombre)->get(); 
                return view('rutas.busqueda', compact('bus'));      
        }

 
}
