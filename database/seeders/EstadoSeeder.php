<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = DB::table('usuarios')->get()->first();
        $pais = DB::table('paises')->where('sigla', 'BR')->get()->first();

        DB::table('estados')->insert([
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Acre',
                'slug' => 'acre',
                'sigla' => 'AC',
                'codigo_ibge' => 12,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Alagoas',
                'slug' => 'alagoas',
                'sigla' => 'AL',
                'codigo_ibge' => 27,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Amapá',
                'slug' => 'amapa',
                'sigla' => 'AP',
                'codigo_ibge' => 16,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Amazonas',
                'slug' => 'amazonas',
                'sigla' => 'AM',
                'codigo_ibge' => 13,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Bahia',
                'slug' => 'bahia',
                'sigla' => 'BA',
                'codigo_ibge' => 29,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Ceará',
                'slug' => 'ceara',
                'sigla' => 'CE',
                'codigo_ibge' => 23,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Distrito Federal',
                'slug' => 'distrito-federal',
                'sigla' => 'DF',
                'codigo_ibge' => 53,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Espírito Santo',
                'slug' => 'espirito-santo',
                'sigla' => 'ES',
                'codigo_ibge' => 32,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Goiás',
                'slug' => 'goias',
                'sigla' => 'GO',
                'codigo_ibge' => 52,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Maranhão',
                'slug' => 'maranhao',
                'sigla' => 'MA',
                'codigo_ibge' => 21,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Mato Grosso',
                'slug' => 'mato-grosso',
                'sigla' => 'MT',
                'codigo_ibge' => 51,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Mato Grosso do Sul',
                'slug' => 'mato-grosso-do-sul',
                'sigla' => 'MS',
                'codigo_ibge' => 50,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Minas Gerais',
                'slug' => 'minas-gerais',
                'sigla' => 'MG',
                'codigo_ibge' => 31,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Pará',
                'slug' => 'para',
                'sigla' => 'PA',
                'codigo_ibge' => 15,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Paraíba',
                'slug' => 'paraiba',
                'sigla' => 'PB',
                'codigo_ibge' => 25,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Paraná',
                'slug' => 'parana',
                'sigla' => 'PR',
                'codigo_ibge' => 41,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Pernambuco',
                'slug' => 'pernambuco',
                'sigla' => 'PE',
                'codigo_ibge' => 26,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Piauí',
                'slug' => 'piaui',
                'sigla' => 'PI',
                'codigo_ibge' => 22,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Rio Grande do Norte',
                'slug' => 'rio-grande-do-norte',
                'sigla' => 'RN',
                'codigo_ibge' => 24,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Rio Grande do Sul',
                'slug' => 'rio-grande-do-sul',
                'sigla' => 'RS',
                'codigo_ibge' => 43,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Rio de Janeiro',
                'slug' => 'rio-de-janeiro',
                'sigla' => 'RJ',
                'codigo_ibge' => 33,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Rondônia',
                'slug' => 'rondonia',
                'sigla' => 'RO',
                'codigo_ibge' => 11,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Roraima',
                'slug' => 'roraima',
                'sigla' => 'RR',
                'codigo_ibge' => 14,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Santa Catarina',
                'slug' => 'santa-catarina',
                'sigla' => 'SC',
                'codigo_ibge' => 42,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'São Paulo',
                'slug' => 'sao-paulo',
                'sigla' => 'SP',
                'codigo_ibge' => 35,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Sergipe',
                'slug' => 'sergipe',
                'sigla' => 'SE',
                'codigo_ibge' => 28,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'pais_id' => $pais->id,
                'nome' => 'Tocantins',
                'slug' => 'tocantins',
                'sigla' => 'TO',
                'codigo_ibge' => 17,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
