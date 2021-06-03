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
            'icone1' => 'icon-box iconbox-blue',
            'icone2' => 'bx bxl-dribbble',
            'titre' => 'Lorem Ipsum',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi',
        ]);

        DB::table('services')->insert([
            'icone1' => 'icon-box iconbox-orange',
            'icone2' => 'bx bx-file',
            'titre' => 'Sed Perspiciatis',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore',
        ]);

        DB::table('services')->insert([
            'icone1' => 'icon-box iconbox-pink',
            'icone2' => 'bx bx-tachometer',
            'titre' => 'Magni Dolores',
            'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia',
        ]);

        DB::table('services')->insert([
            'icone1' => 'icon-box iconbox-yellow',
            'icone2' => 'bx bx-layer',
            'titre' => 'Nemo Enim',
            'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis',
        ]);

        DB::table('services')->insert([
            'icone1' => 'icon-box iconbox-red',
            'icone2' => 'bx bx-slideshow',
            'titre' => 'Dele Cardo',
            'description' => 'Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur',
        ]);

        DB::table('services')->insert([
            'icone1' => 'icon-box iconbox-teal',
            'icone2' => 'bx bx-arch',
            'titre' => 'Divera Don',
            'description' => 'Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur',
        ]);
    }
}
