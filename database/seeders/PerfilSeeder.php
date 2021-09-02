<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = DB::table('usuarios')->get()->first();

        DB::table('perfis')->insert([
            [
                'id' => Str::orderedUuid(),
                'codigo' => 1,
                'nome' => 'Administrador',
                'slug' => 'administrador',
                'descricao' => 'Administrador do sistema',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'codigo' => 2,
                'nome' => 'Moderador',
                'slug' => 'Moderador',
                'descricao' => 'Moderador do sistema',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'codigo' => 3,
                'nome' => 'Funcionário',
                'slug' => 'funcionario',
                'descricao' => 'Funcionário do sistema',
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }
}
