<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'texte' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
            rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
            risus at semper.',
            'personne_id' => 1,
        ]);

        DB::table('testimonials')->insert([
            'texte' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
            cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
            legam anim culpa.',
            'personne_id' => 2,
        ]);

        DB::table('testimonials')->insert([
            'texte' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
            veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
            minim.',
            'personne_id' => 3,
        ]);

        DB::table('testimonials')->insert([
            'texte' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
            fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
            dolore labore.',
            'personne_id' => 4,
        ]);
    }
}
