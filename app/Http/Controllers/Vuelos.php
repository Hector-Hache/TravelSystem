<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModeloVuelo;
use App\Models\ModeloRutas;
use App\Models\ModeloTipovuelo;

class Vuelos extends Controller
{
  public function index(){
        //consulta a traves de modelo 
        $rut = ModeloRutas::all();
        $tipo = ModeloTipovuelo::all();
        $v = ModeloVuelo::join('ruta', 'vuelo.idruta', '=', 'ruta.id')
        ->join('tipovuelo', 'vuelo.tvuelo', '=', 'tipovuelo.id')
        ->select('vuelo.id', 'ruta.precio', 'vuelo.idruta', 'ruta.origen', 'ruta.destino', 'tipovuelo.descripcion', 'vuelo.hsalida', 'vuelo.hllegada')
        ->orderby('vuelo.id','asc')
        ->get();
         return view('vuelos.vuelo', compact('v', 'rut', 'tipo'));   
     }
     public function registro(Request $request)
     {
    // Registro de una ruta en la base de datos a traves del Modelo
        $category = new ModeloVuelo();
        $category->idruta = $request->input('lisruta');
        $category->tvuelo = $request->input('lisclase');
        $category->hsalida = $request->input('hsalida');
        $category->hllegada = $request->input('hllegada');
        $category->save();
        return redirect()->route('vuelo');
   } 
        public function formactu($id){
        $r =$id;
        $rut = ModeloRutas::all();
        $tipo = ModeloTipovuelo::all();
        $vuelo = ModeloVuelo::findOrfail($r);
        $nruta=$vuelo->idruta;
        $res = ModeloRutas::all()
        ->where('id', '=', $nruta);
        $ntipo=$vuelo->tvuelo;
        $resul =  ModeloTipovuelo::all()
        ->where('id', '=', $ntipo); 
        $h=$vuelo->hllegada;
        $s=$vuelo->hsalida;
        return view('vuelos.formulario', compact('rut', 'tipo', 'res', 'resul', 'h', 's', 'r'));   
    }
    public function acvuelo(Request $request, $r)
    {
        $category = ModeloVuelo::findOrfail($r);
        $category->idruta = $request->input('lisruta');
        $category->tvuelo = $request->input('lisclase');
        $category->hsalida = $request->input('hsalida');
        $category->hllegada = $request->input('hllegada');
        $category->save();
        return redirect()->route('vuelo');
 } 

}
