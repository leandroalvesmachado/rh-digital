<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = DB::table('usuarios')->get()->first();
        $cargoSimboloS1 = DB::table('cargo_simbolos')->where('sigla', 'S-1')->get()->first();
        $cargoSimboloS2 = DB::table('cargo_simbolos')->where('sigla', 'S-2')->get()->first();
        $cargoSimboloDg1 = DB::table('cargo_simbolos')->where('sigla', 'DG-1')->get()->first();
        $cargoSimboloDns1 = DB::table('cargo_simbolos')->where('sigla', 'DNS-1')->get()->first();
        $cargoSimboloDns2 = DB::table('cargo_simbolos')->where('sigla', 'DNS-2')->get()->first();
        $cargoSimboloDns3 = DB::table('cargo_simbolos')->where('sigla', 'DNS-3')->get()->first();

        DB::table('cargos')->insert([
            [
                'id' => Str::orderedUuid(),
                'cargo_simbolo_id' => $cargoSimboloS1->id,
                'nome' => 'Secretário',
                'slug' => 'secretario',
                'descricao' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'cargo_simbolo_id' => $cargoSimboloS2->id,
                'nome' => 'Secretário Executivo',
                'slug' => 'secretario-executivo',
                'descricao' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'cargo_simbolo_id' => $cargoSimboloDns3->id,
                'nome' => 'Articulador',
                'slug' => 'articulador',
                'descricao' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'cargo_simbolo_id' => $cargoSimboloDns1->id,
                'nome' => 'Coordenador',
                'slug' => 'coordenador',
                'descricao' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'cargo_simbolo_id' => $cargoSimboloDns2->id,
                'nome' => 'Assessor Técnico',
                'slug' => 'assessor-tecnico',
                'descricao' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'cargo_simbolo_id' => $cargoSimboloDg1->id,
                'nome' => 'Ouvidor Geral',
                'slug' => 'ouvidor-geral',
                'descricao' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'cargo_simbolo_id' => $cargoSimboloDns1->id,
                'nome' => 'Corregedor Geral',
                'slug' => 'corregedor-geral',
                'descricao' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'cargo_simbolo_id' => $cargoSimboloDg1->id,
                'nome' => 'Coordenador Executivo',
                'slug' => 'coordenador-executivo',
                'descricao' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'cargo_simbolo_id' => $cargoSimboloDns2->id,
                'nome' => 'Gerente',
                'slug' => 'gerente',
                'descricao' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
