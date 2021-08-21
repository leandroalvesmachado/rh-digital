<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrgaoSeeder extends Seeder
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
        $municipio = DB::table('municipios')->where('nome', 'Fortaleza')->get()->first();

        DB::table('orgaos')->insert([
            [
                'id' => Str::orderedUuid(),
                'estado_id' => $estado->id,
                'municipio_id' => $municipio->id,
                'nome' => 'Controladoria e Ouvidoria Geral do Município',
                'slug' => 'controladoria-e-ouvidoria-geral-do-municipio',
                'sigla' => 'CGM',
                'bairro' => 'Aldeota',
                'cep' => '60160230',
                'endereco' => 'Av. Dom Luís',
                'endereco_complemento' => '11° andar',
                'telefone' => '85 34526768',
                'numero' => '807',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
