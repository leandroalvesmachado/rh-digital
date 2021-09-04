<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SetorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = DB::table('usuarios')->get()->first();
        $orgao = DB::table('orgaos')->where('sigla', 'CGM')->get()->first();

        DB::table('setores')->insert([
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Secretário',
                'slug' => 'secretario',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Secretário Executivo',
                'slug' => 'secretario-executivo',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Assessoria Jurídica',
                'slug' => 'assessoria-juridica',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Assessoria de Planejamento e Desenvolvimento Institucional',
                'slug' => 'assessoria-de-planejamento-e-desenvolvimento-institucional',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Assessoria de Controle Interno e Ouvidoria',
                'slug' => 'assessoria-de-controle-interno-e-ouvidoria',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Ouvidoria Geral',
                'slug' => 'ouvidoria-geral',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Corregedoria Geral',
                'slug' => 'corregedoria-geral',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Coordenadoria Geral de Controle Interno',
                'slug' => 'coordenadoria-geral-de-controle-interno',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Coordenadoria de Auditoria',
                'slug' => 'coordenadoria-de-auditoria',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Coordenadoria de Transparência e Integridade',
                'slug' => 'coordenadoria-de-transparencia-e-integridade',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Coordenadoria Administrativo-Financeiro',
                'slug' => 'coordenadoria-administrativo-financeiro',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
