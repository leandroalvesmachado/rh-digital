<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrgaoSetorSeeder extends Seeder
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

        DB::table('orgao_setores')->insert([
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Auditoria',
                'slug' => 'auditoria',
                'sigla' => 'auditoria',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'orgao_id' => $orgao->id,
                'nome' => 'Célula de Gestão de Tecnologia da Informação e Comunicação',
                'slug' => 'celula-de-gestao-de-tecnologia-da-informacao-e-comunicacao',
                'sigla' => 'CETIC',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
