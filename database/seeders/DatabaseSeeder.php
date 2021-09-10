<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UsuarioSeeder::class,
            EstadoSeeder::class,
            MunicipioSeeder::class,
            OrgaoSeeder::class,
            SetorSeeder::class,
            CelulaSeeder::class,
            SecaoSeeder::class,
            ArquivoTipoSeeder::class,
            PerfilSeeder::class,
            UsuarioPerfilSeeder::class,
            CargoSimboloSeeder::class,
            CargoSeeder::class,
            EstadoCivilSeeder::class,
            SexoSeeder::class
        ]);
    }
}
