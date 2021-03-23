<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tvueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [//array de datos 
            ['descripcion' => 'viaja en primera clase: Atención personalizada, asientos extra cómodos que se hacen cama.',
            
            ],

            ['descripcion' => 'viaja en seguna clase: ofrece más comodidades al viajero que las clases inferiores',
            ],

            ['descripcion' => 'viaja en tercera clase: corta distancia entre cada asiento, y una variedad más pequeña de comidas ',
            ]
           
        ];
        DB::table('tipovuelo')->insert($datos);//inserta los datos a la tabla tipo vuelo
    }
}
