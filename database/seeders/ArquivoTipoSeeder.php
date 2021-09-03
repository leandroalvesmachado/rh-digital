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
                'nome' => 'CNH',
                'slug' => 'cnh',
                'descricao' => 'Informe a CNH (Carteira Nacional de Habilitação) com validade',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Certidão de Casamento',
                'slug' => 'certidao-de-casamento',
                'descricao' => 'Informe a Certidão de casamento do servidor',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Comprovante de Endereço',
                'slug' => 'comprovante-de-endereco',
                'descricao' => 'Informe um comprovante de residência em nome do servidor ou conjuguê ou no nome do pai ou da mãe',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'PIS/PASEP',
                'slug' => 'pispasep',
                'descricao' => 'Informe o PIS/PASEP ou carteira de trabalho, não aceitar NIT',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Declaração de Endereço',
                'slug' => 'declaracao-de-endereco',
                'descricao' => 'Informe a declaração de endereço',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Certidão de Nascimento',
                'slug' => 'certidao-de-nascimento',
                'descricao' => 'Informe a certidão de nascimento',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'RG',
                'slug' => 'rg',
                'descricao' => 'Informe o documento de RG',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'CPF',
                'slug' => 'cpf',
                'descricao' => 'Informe o documento de CPF',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Carteira de Trabalho',
                'slug' => 'carteira-de-trabalho',
                'descricao' => 'Informe a carteira de trabalho',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'União Estável',
                'slug' => 'uniao-estavel',
                'descricao' => 'Informe a União Estável',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Certidão de Óbito',
                'slug' => 'certidao-de-obito',
                'descricao' => 'Informe a Certidão de Óbito',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Certidão de divórcio',
                'slug' => 'certidao-de-divorcio',
                'descricao' => 'Informe a Certidão de divórcio',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Laudo Médico',
                'slug' => 'laudo-medico',
                'descricao' => 'Laudo Médico',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Carteira Funcional',
                'slug' => 'carteira-funcional',
                'descricao' => 'Informe a Carteira Funcional',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Termo de Compromisso',
                'slug' => 'termo-de-compromisso',
                'descricao' => 'Informe o Termo de Compromisso',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Termo de Aditivo',
                'slug' => 'termo-de-aditivo',
                'descricao' => 'Informe o Termo de Aditivo',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Termo de Rescisão',
                'slug' => 'termo-de-rescisao',
                'descricao' => 'Informe o Termo de Rescisão',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Titulo de Eleitor',
                'slug' => 'titulo-de-eleitor',
                'descricao' => 'Informe o titulo de eleitor',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Certidão de quitação da Justiça Eleitoral',
                'slug' => 'certidao-de-quitacao-da-justica-eleitoral',
                'descricao' => 'Informe da certidão da justiça eleitoral',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Registro Nacional de Estrangeiro',
                'slug' => 'registro-nacional-de-estrangeiro',
                'descricao' => 'Informe do Registro Nacional de Estrangeiro',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Comprovante de conta bancária',
                'slug' => 'comprovante-de-conta-bancaria',
                'descricao' => 'Informe da conta bancária',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Certificado de Reservista',
                'slug' => 'certificado-de-reservista',
                'descricao' => 'Informe de reservista',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Certificado de Escolaridade',
                'slug' => 'certificado-de-escolaridade',
                'descricao' => 'Informe da escolaridade',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Registro Profissional',
                'slug' => 'registro-profissional',
                'descricao' => 'Informe do registro profissional',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Declaração de quitação com o Conselho de Classe',
                'slug' => 'declaracao-de-quitacao-com-o-conselho-de-classe',
                'descricao' => 'Declaração de quitação com o Conselho de Classe',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Declaração do Conselho de Classe',
                'slug' => 'declaracao-do-conselho-de-classe',
                'descricao' => 'Declaração de Penalidade do Conselho de Classe',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Certidão de Acumulação de Cargos do Estado do Ceará',
                'slug' => 'certidao-de-acumulacao-de-cargos-do-estado-do-ceara',
                'descricao' => 'Certidão de Acumulação de Cargos do Estado do Ceará',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Certidão de Acumulação de Cargos da PMF',
                'slug' => 'certidao-de-acumulacao-de-cargos-da-pmf',
                'descricao' => 'Certidão de Acumulação de Cargos da PMF',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Declaração de não acumulação de Cargo/Emprego/Função',
                'slug' => 'declaracao-de-nao-acumulacao-de-cargoempregofuncao',
                'descricao' => 'Declaração de não acumulação de Cargo/Emprego/Função',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);

    }
}
