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
            'title'         => 'Solusi IT Terbaik untuk Keberlanjutan Bisnis Anda',
            'description'   => '<i>Kami menghadirkan solusi digital modern yang membantu bisnis berkembang lebih cepat, efisien, dan siap menghadapi era teknologi.</i>',
            'image'         => 'hero/hero-4.png',
            'keywords_1'    => 'Web Development',
            'keywords_2'    => 'Mobile Development',
            'keywords_3'    => 'IT Training & IT Bootcamp',
            'keywords_4'    => '',
            'keywords_5'    => '',
            'cta_1'         => 'Konsultasi Gratis',
            'cta_2'         => 'Lihat Portofolio',
            'status_data'   => 'Active',
        ]);
    }
}
