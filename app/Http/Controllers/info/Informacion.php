<?php

namespace App\Http\Controllers\info;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Informacion extends Controller
{
    public function mision(){//retorna la vista o interactua con el modelo de datos
        return view('informacion.mision');
    }
    public function vision(){//retorna la vista o interactua con el modelo de datos
        return view('informacion.vision');
    }
    public function ubicacion(){//retorna la vista o interactua con el modelo de datos
        return view('informacion.ubicacion');
    }
    public function histo(){//retorna la vista o interactua con el modelo de datos
        return view('informacion.historia');
    }
}
