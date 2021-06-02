<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'icone' => 'bxl-dribble',
            'titre' => 'Lorem Ipsum',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi',
        ]);

        DB::table('services')->insert([
            'icone' => 'bx-file',
            'titre' => 'Sed Perspiciatis',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore',
        ]);

        DB::table('services')->insert([
            'icone' => 'bxl-tachometer',
            'titre' => 'Magni Dolores',
            'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia',
        ]);

        DB::table('services')->insert([
            'icone' => 'bx-layer',
            'titre' => 'Nemo Enim',
            'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis',
        ]);

        DB::table('services')->insert([
            'icone' => 'bx-slideshow',
            'titre' => 'Dele Cardo',
            'description' => 'Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur',
        ]);

        DB::table('services')->insert([
            'icone' => 'bx-arch',
            'titre' => 'Divera Don',
            'description' => 'Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur',
        ]);
    }
}
