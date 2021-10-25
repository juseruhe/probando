<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'rol' => 'Administrador',
            'nombre' => 'Juan Ruiz',
            'correo' => 'jsruiz@gmail.com',
            'tipo_documento' => 'Cédula',
            'numero_documento' => '1065670',
            'ocupacion' => 'Estudiante',
            'estado' => 'Confirmado',
        ]);


       

    
        DB::table('usuarios')->insert([
            'rol' => 'Manager',
            'nombre' => 'Pepito',
            'correo' => 'pepe@gmail.com',
            'tipo_documento' => 'TI',
            'numero_documento' => '555555',
            'ocupacion' => 'Técnico',
            'estado' => 'Espera',
        ]);
    }
}
