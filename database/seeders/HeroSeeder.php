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
            'keywords_3'    => 'IT Training',
            'keywords_4'    => 'IT Bootcamp',
            'keywords_5'    => '',
            'cta_1'         => 'Konsultasi Gratis',
            'cta_2'         => 'Lihat Portofolio',
            'is_active'     => true
        ]);

        Hero::create([
            'title'         => 'Dari Ide Menjadi Produk Digital yang Nyata',
            'description'   => '<i>Kami bantu bisnis Anda tumbuh lewat website, aplikasi mobile, dan SDM IT yang siap kerja lewat pelatihan bersertifikat</i>',
            'image'         => 'hero/hero-4.png',
            'keywords_1'    => 'Website',
            'keywords_2'    => 'Mobile Apps',
            'keywords_3'    => 'Training',
            'keywords_4'    => 'Sertifikasi',
            'keywords_5'    => null,
            'cta_1'         => 'Hubungi Kami',
            'cta_2'         => 'Portfolio',
            'is_active'     => false,
        ]);

        Hero::create([
            'title'         => 'Wujudkan Transformasi Digital Bisnis Anda Bersama Kami',
            'description'   => '<i>Dari pembuatan website, aplikasi mobile, hingga pelatihan dan sertifikasi IT — kami hadir sebagai mitra teknologi tepercaya untuk pertumbuhan bisnis Anda.</i>',
            'image'         => 'hero/hero-4.png',
            'keywords_1'    => 'Cepat',
            'keywords_2'    => 'Andal',
            'keywords_3'    => 'Profesional',
            'keywords_4'    => 'Terpercaya',
            'keywords_5'    => null,
            'cta_1'         => 'Mulai Konsultasi',
            'cta_2'         => 'Lihat Layanan Kami',
            'is_active'     => false,
        ]);
    }
}
