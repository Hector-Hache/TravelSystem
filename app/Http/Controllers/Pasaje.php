<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\ModeloVuelo;
use App\Models\ModeloRutas;
use App\Models\ModeloTipovuelo;
use App\Models\ModeloPasaje;
use App\Models\User;
use App\Models\ModeloAvion;
use Barryvdh\DomPDF\Facade as PDF;



class Pasaje extends Controller
{
    
    public function index(){
        $pas = ModeloPasaje::join('vuelo', 'idvuelo', '=', 'vuelo.id')
        ->join('ruta', 'vuelo.idruta', '=', 'ruta.id')
        ->join('tipovuelo', 'vuelo.tvuelo', '=', 'tipovuelo.id')
        ->join('users', 'idcliente', '=', 'users.id')
        ->join('avion', 'idavion', '=', 'avion.id')
        ->select('pasaje.id as llave', 'ruta.precio', 'vuelo.idruta',
         'ruta.origen', 'ruta.destino', 'tipovuelo.descripcion as tipo', 
         'vuelo.hsalida', 'vuelo.hllegada', 'avion.matricula', 'avion.descripcion', 
         'users.id as cedula', 'users.name as nombre', 'users.email as correo', 'fecha' )
        ->orderby('pasaje.id','asc')
        ->get();
         return view('pasajes.pasaje', compact('pas')); 
    }

    public function compra(){//retorna la vista o interactua con el modelo de datos
        $rut = ModeloRutas::all();
        $tipo = ModeloTipovuelo::all();
        $avion = ModeloAvion::select('avion.id as iden', 'matricula', 'descripcion')->get();
        $v = ModeloVuelo::join('ruta', 'vuelo.idruta', '=', 'ruta.id')
        ->join('tipovuelo', 'vuelo.tvuelo', '=', 'tipovuelo.id')
        ->select('vuelo.id', 'ruta.precio', 'vuelo.idruta', 'ruta.origen', 'ruta.destino', 'tipovuelo.descripcion', 'vuelo.hsalida', 'vuelo.hllegada')
        ->orderby('vuelo.id','asc')
        ->get();
         return view('pasajes.compras', compact('v', 'rut', 'tipo', 'avion'));   
    }

    public function regcompra(Request $request, $id)
            {  $val=$request->input('lisclase');
                $fec= Carbon::now();
                $cli= auth()->user()->id;
                $var = ModeloVuelo::findOrfail($id);
                $category = new ModeloPasaje();
                $category->idvuelo = $var->id;
                $category->idcliente = $cli;
                $category->idavion = $val;
                $category->fecha = $fec;
                $category->save();
                return redirect()->route('pasaje');
            }
     public function genpdf($llave)
            {  
                $gpdf = ModeloPasaje::where('pasaje.id', '=', $llave)
               // $id=$gpdf->idvuelo;
               //$r = ModeloVuelo::where('id', '=', $id)
                ->join('vuelo', 'idvuelo', '=', 'vuelo.id')
                ->join('ruta', 'vuelo.idruta', '=', 'ruta.id')
                ->join('tipovuelo', 'vuelo.tvuelo', '=', 'tipovuelo.id')
                ->join('users', 'idcliente', '=', 'users.id')
                ->join('avion', 'idavion', '=', 'avion.id')
                ->select('pasaje.id', 'ruta.precio', 'vuelo.idruta',
                 'ruta.origen', 'ruta.destino', 'tipovuelo.descripcion as tipo', 
                 'vuelo.hsalida', 'vuelo.hllegada', 'avion.matricula', 'avion.descripcion', 
                 'users.id as cedula', 'users.name as nombre', 'users.email as correo', 'fecha' )
                ->orderby('pasaje.id','asc')
                ->get();
                $pdf=\PDF::loadVieW('pasajes.recibo', compact('gpdf'));
                 return $pdf->download('recibo.pdf'); 
           }
     public function elimpasaje($llave){
           $t = ModeloPasaje::findOrfail($llave);
           $t->delete();
           return redirect()->route('pasaje');
           }

}
