<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class rutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [//array de datos 
            ['origen' => 'Ipiales',
            'destino' => 'Bogota',
            'precio' => '100000',
            ],
            ['origen' => 'Ipiales',
            'destino' => 'Cali',
            'precio' => '80000',
            ]
           
        ];
        DB::table('ruta')->insert($datos);//inserta los datos a la tabla ruta
    }
}
