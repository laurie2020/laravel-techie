<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            'titre' =>  'Bettter Digital Experience With Techie',
            'description' => 'We are team of talented designers making websites with Bootstrap
            ',
            'image' =>  'home.jpg'
        ]);
    }
}
