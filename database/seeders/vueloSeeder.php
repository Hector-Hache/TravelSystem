<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class vueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [//array de datos 
            ['idruta' => '1',
             'tvuelo' => '1',
             'hsalida' => '10:30:00',
             'hllegada' => '12:00:00',
            ],
            ['idruta' => '1',
             'tvuelo' => '2',
             'hsalida' => '10:30:00',
             'hllegada' => '12:00:00',
            ],
            ['idruta' => '2',
            'tvuelo' => '3',
            'hsalida' => '10:00:00',
            'hllegada' => '11:00:00',
            ]
           
        ];
        DB::table('vuelo')->insert($datos);//inserta los datos a la tabla  vuelo
    }
}
