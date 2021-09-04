<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CelulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = DB::table('usuarios')->get()->first();
        $setorCoordenadoriaGeralControleInterno = DB::table('setores')
            ->where('nome', 'Coordenadoria Geral de Controle Interno')
            ->get()->first();

        $setorCoordenadoriaAuditoria = DB::table('setores')
            ->where('nome', 'Coordenadoria de Auditoria')
            ->get()->first();

        $setorCoordenadoriaTransparenciaIntegridade = DB::table('setores')
            ->where('nome', 'Coordenadoria de Transparência e Integridade')
            ->get()->first();

        $setorCoordenadoriaAdministrativoFinanceiro = DB::table('setores')
            ->where('nome', 'Coordenadoria Administrativo-Financeiro')
            ->get()->first();

        DB::table('celulas')->insert([
            [
                'id' => Str::orderedUuid(),
                'setor_id' => $setorCoordenadoriaGeralControleInterno->id,
                'nome' => 'Célula de Gestão de Estatística, Risco e Desempenho',
                'slug' => 'celula-de-gestao-de-estatistica-risco-e-desempenho',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'setor_id' => $setorCoordenadoriaGeralControleInterno->id,
                'nome' => 'Célula de Gestão de Contratos, Convênios e Parcerias',
                'slug' => 'celula-de-gestao-de-contratos-convenios-e-parcerias',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'setor_id' => $setorCoordenadoriaGeralControleInterno->id,
                'nome' => 'Célula de Gestão de Regularidade',
                'slug' => 'celula-de-gestao-de-regularidade',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'setor_id' => $setorCoordenadoriaGeralControleInterno->id,
                'nome' => 'Célula de Gestão de Prestação de Contas',
                'slug' => 'celula-de-gestao-de-prestacao-de-contas',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'setor_id' => $setorCoordenadoriaAuditoria->id,
                'nome' => 'Célula de Gestão de Ações Preventivas',
                'slug' => 'celula-de-gestao-de-acoes-preventivas',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'setor_id' => $setorCoordenadoriaAuditoria->id,
                'nome' => 'Célula de Gestão de Auditorias Especiais',
                'slug' => 'celula-de-gestao-de-auditorias-especiais',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'setor_id' => $setorCoordenadoriaTransparenciaIntegridade->id,
                'nome' => 'Célula de Gestão de Atendimento e Resposta',
                'slug' => 'celula-de-gestao-de-atendimento-e-resposta',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'setor_id' => $setorCoordenadoriaTransparenciaIntegridade->id,
                'nome' => 'Célula de Gestão de Desenvolvimento e Acompanhamento de Informações',
                'slug' => 'celula-de-gestao-de-desenvolvimento-e-acompanhamento-de-informacoes',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'setor_id' => $setorCoordenadoriaTransparenciaIntegridade->id,
                'nome' => 'Célula de Gestão de Desenvolvimento e Acompanhamento de Informações',
                'slug' => 'celula-de-gestao-de-desenvolvimento-e-acompanhamento-de-informacoes',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'setor_id' => $setorCoordenadoriaAdministrativoFinanceiro->id,
                'nome' => 'Célula de Gestão Administrativa',
                'slug' => 'celula-de-gestao-administrativa',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'setor_id' => $setorCoordenadoriaAdministrativoFinanceiro->id,
                'nome' => 'Célula de Gestão Financeira',
                'slug' => 'celula-de-gestao-financeira',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'setor_id' => $setorCoordenadoriaAdministrativoFinanceiro->id,
                'nome' => 'Célula de Gestão de Tecnologia da Informação e Comunicação',
                'slug' => 'celula-de-gestao-de-tecnologia-da-informacao-e-comunicacao',
                'sigla' => '',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
