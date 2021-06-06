<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
        [
            'id' => 1,
            'nombre' => 'Cristian',
            'apellido' => 'Corbalan',
            'correo' => 'ccris@gmail.com',
            'clave' => Hash::make('asdasdasd'),
            'password' => Hash::make('asdasdasd'),
            'created_at' => now(),
            'updated_at' => now(),
        ],
]);
    }
}
