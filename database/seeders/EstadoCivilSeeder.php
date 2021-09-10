<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = DB::table('usuarios')->get()->first();

        DB::table('estados_civis')->insert([
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Solteiro',
                'slug' => 'solteiro',
                'descricao' => 'É a pessoa que nunca se casou, independente se possui um relacionamento estável ou não',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Casado',
                'slug' => 'casado',
                'descricao' => 'É o indivíduo que possui uma união matrimonial através do casamento civil, independente do regime de bens adotado',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Separado',
                'slug' => 'separado',
                'descricao' => 'É quem não vive mais com o companheiro, porém ainda não está divorciado. A pessoa que está separada, pode decretar a separação judicial, para acabar com os deveres da sociedade conjugal',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Divorciado',
                'slug' => 'divorciado',
                'descricao' => 'É a pessoa que teve homologado seu pedido de divórcio através da justiça, ou de uma escritura',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'nome' => 'Viúvo',
                'slug' => 'viuvo',
                'descricao' => 'É o indivíduo que o cônjuge (marido ou esposa) faleceu',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
