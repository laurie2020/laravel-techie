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
            'photo' => 'testimonials-1.jpg',
            'nom' => 'Goodman',
            'prenom' => 'Saul',
            'profession' => "Ceo & Founder"
        ]);

        DB::table('personnes')->insert([
            'photo' => 'testimonials-2.jpg',
            'nom' => 'Wilsson',
            'prenom' => 'Sara',
            'profession' => "Designer"
        ]);

        DB::table('personnes')->insert([
            'photo' => 'testimonials-3.jpg',
            'nom' => 'Karlis',
            'prenom' => 'Jena',
            'profession' => "Store Owner"
        ]);

        DB::table('personnes')->insert([
            'photo' => 'testimonials-4.jpg',
            'nom' => 'Brandon',
            'prenom' => 'Matt',
            'profession' => "Freelancer"
        ]);

        DB::table('personnes')->insert([
            'photo' => 'testimonials-5.jpg',
            'nom' => 'Larson',
            'prenom' => 'John',
            'profession' => "Entrepreneur"
        ]);
    }
}
