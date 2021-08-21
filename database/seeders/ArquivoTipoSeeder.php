<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArquivoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = DB::table('usuarios')->get()->first();

        DB::table('arquivo_tipos')->insert([
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Abertura do PAD',
                'slug' => 'ato-ou-portaria-de-abertura-do-pad',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Atestados e declarações médicas',
                'slug' => 'atestados-e-declaracoes-medicas',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato de Designação',
                'slug' => 'ato-de-designacao',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato de Dispensa',
                'slug' => 'ato-de-dispensa',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato de Disponibilização por Requisição',
                'slug' => 'ato-de-disponibilizacao-por-requisicao',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Recondução',
                'slug' => 'ato-ou-portaria-de-reconducao',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Reintegração',
                'slug' => 'ato-ou-portaria-de-reintegracao',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Reversão da Aposentadoria',
                'slug' => 'ato-ou-portaria-de-reversao-da-aposentadoria',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria da Cessão',
                'slug' => 'ato-ou-portaria-da-cessao',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria da Nomeação - contrato de trabalho',
                'slug' => 'ato-ou-portaria-da-nomeacao-contrato-de-trabalho',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Afastamento do Serviço Militar',
                'slug' => 'ato-ou-portaria-de-afastamento-do-servico-militar',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Afastamento para Formação Profissional',
                'slug' => 'ato-ou-portaria-de-afastamento-para-formacao-profissional',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Afastamento para Mandato Sindical',
                'slug' => 'ato-ou-portaria-de-afastamento-para-mandato-sindical',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Afastamento para Missão ou Estudo fora do Município',
                'slug' => 'ato-ou-portaria-de-afastamento-para-missao-ou-estudo-fora-do-municipio',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Afastamento para Trato de Interesse Particular',
                'slug' => 'ato-ou-portaria-de-afastamento-para-trato-de-interesse-particular',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Aproveitamento',
                'slug' => 'ato-ou-portaria-de-aproveitamento',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Averbação de Tempo de Serviço',
                'slug' => 'ato-ou-portaria-de-averbacao-de-tempo-de-servico',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Cancelamento da Suplementação da Carga Horária',
                'slug' => 'ato-ou-portaria-de-cancelamento-da-suplementacao-da-carga-horaria',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Cassação da Disponibilidade',
                'slug' => 'ato-ou-portaria-de-cassacao-da-disponibilidade',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de cessação da ITA-GTA',
                'slug' => 'ato-ou-portaria-de-cessacao-da-ita-gta',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Cessação da Reversão da Aposentadoria',
                'slug' => 'ato-ou-portaria-de-cessacao-da-reversao-da-aposentadoria',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de cessação da Vantagem Pecuniária',
                'slug' => 'ato-ou-portaria-de-cessacao-da-vantagem-pecuniaria',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Cessação de Readequação',
                'slug' => 'ato-ou-portaria-de-cessacao-de-readequacao',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Cessão',
                'slug' => 'ato-ou-portaria-de-cessao',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de concessão da ITA-GTA',
                'slug' => 'ato-ou-portaria-de-concessao-da-ita-gta',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de concessão da Vantagem Pecuniária',
                'slug' => 'ato-ou-portaria-de-concessao-da-vantagem-pecuniaria',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Concessão de Readaptação',
                'slug' => 'ato-ou-portaria-de-concessao-de-readaptacao',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Concessão de Readaptação',
                'slug' => 'ato-ou-portaria-de-concessao-de-readaptacao',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Concessão de Readequação',
                'slug' => 'ato-ou-portaria-de-concessao-de-readequacao',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Decisão do PAD',
                'slug' => 'ato-ou-portaria-de-decisao-do-pad',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Demissão',
                'slug' => 'ato-ou-portaria-de-demissao',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Desaverbação de Tempo de Serviço',
                'slug' => 'ato-ou-portaria-de-desaverbacao-de-tempo-de-servico',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Designação para Comissão de Trabalho',
                'slug' => 'ato-ou-portaria-de-designacao-para-comissao-de-trabalho',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Ato ou Portaria de Destituição',
                'slug' => 'ato-ou-portaria-de-destituicao',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
