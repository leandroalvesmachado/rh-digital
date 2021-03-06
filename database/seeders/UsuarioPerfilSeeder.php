<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Perfil;

class UsuarioPerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = DB::table('usuarios')->get()->first();
        $perfil = DB::table('perfis')->where('codigo', Perfil::ADMIN)->get()->first();
        $perfilFuncionario = DB::table('perfis')->where('codigo', Perfil::FUNCIONARIO)->get()->first();

        DB::table('usuario_perfis')->insert([
            [
                'id' => Str::orderedUuid(),
                'usuario_id' => $usuario->id,
                'perfil_id' => $perfil->id,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'id' => Str::orderedUuid(),
                'usuario_id' => $usuario->id,
                'perfil_id' => $perfilFuncionario->id,
                'created_by' => $usuario->id,
                'updated_by' => $usuario->id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
