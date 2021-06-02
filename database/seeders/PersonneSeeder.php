<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnes')->insert([
            'photo' => 'Insérez une photo',
            'nom' => 'Guy De ',
            'prenom' => 'Maupassant ',
            'profession' => "Poète/Ecrivain"
        ]);
    }
}
