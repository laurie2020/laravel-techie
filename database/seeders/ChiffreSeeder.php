<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiffreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chiffres')->insert([
            'nombre' => 232,
            'titre' => 'Clients'
        ]);

        DB::table('chiffres')->insert([
            'nombre' => 531,
            'titre' => 'Projets'
        ]);

        DB::table('chiffres')->insert([
            'nombre' => 1463,
            'titre' => 'Hours Of Support'
        ]);

        DB::table('chiffres')->insert([
            'nombre' => 15,
            'titre' => 'Hard Workers'
        ]);
    }
}
