<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class avionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [//array de datos 
            ['matricula' => 'ABC-345',
            'descripcion' => 'Airbus A330',
            ],

            ['matricula' => 'CDF-567',
            'descripcion' => 'Boeing 767',
           ],

           ['matricula' => 'GTY-890',
           'descripcion' => 'Boeing 777',
          ]
           
        ];
        DB::table('avion')->insert($datos);//inserta los datos a la tabla avion
    }
    
}
