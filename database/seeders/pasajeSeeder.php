<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pasajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [//array de datos 
            ['idvuelo' => '1',
             'idcliente' => '1',
             'idavion' => '1',
             'fecha' => "2021-01-16",
            ],
            ['idvuelo' => '2',
            'idcliente' => '1',
            'idavion' => '2',
            'fecha' => "2021-02-14",
            ],
            ['idvuelo' => '3',
            'idcliente' => '1',
            'idavion' => '3',
            'fecha' => "2021-03-1",
            ]
           
        ];
        DB::table('pasaje')->insert($datos);//inserta los datos a la tabla  pasaje
    }
}
