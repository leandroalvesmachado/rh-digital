<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = DB::table('usuarios')->get()->first();
        $estado = DB::table('estados')->where('sigla', 'CE')->get()->first();

        DB::table('municipios')->insert([
            [
                'id' => Str::orderedUuid(),
                'estado_id' => $estado->id,
                'nome' => 'Fortaleza',
                'slug' => 'fortaleza',
                'codigo_ibge' => '2304400',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
