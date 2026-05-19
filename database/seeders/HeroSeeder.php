<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        # ...
        Hero::truncate();

        # ...
        Hero::create([
            'title'         => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit',
            'description'   => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorem eum similique voluptates quis iste iure incidunt commodi molestiae quos? Eligendi, adipisci distinctio! Numquam soluta modi exercitationem, odio iure aliquid.',
            'image'         => 'hero/hero-1.png',
            'keywords_1'    => null,
            'keywords_2'    => null,
            'keywords_3'    => null,
            'keywords_4'    => null,
            'keywords_5'    => null,
            'cta_1'         => 'Lorem ipsum',
            'cta_2'         => 'Lorem ipsum',
            'status_data'   => 'Active',
        ]);
    }
}
