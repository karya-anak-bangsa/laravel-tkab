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
            'description'   => 'Solusi software development, mobile apps, dan pelatihan IT profesional untuk membantu bisnis berkembang di era digital.',
            'image'         => 'hero/hero-1.png',
            'keywords_1'    => 'Web Development',
            'keywords_2'    => 'Mobile Development',
            'keywords_3'    => 'Training IT',
            'keywords_4'    => 'Bootcamp',
            'keywords_5'    => null,
            'cta_1'         => 'Konsultasi Gratis',
            'cta_2'         => 'Lihat Portofolio',
            'status_data'   => 'Active',
        ]);
    }
}
