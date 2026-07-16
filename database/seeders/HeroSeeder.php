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
            'image'         => 'hero/hero-4.webp',
            'keyword_1'    => 'Web Development',
            'keyword_2'    => 'Mobile Development',
            'keyword_3'    => 'IT Training',
            'keyword_4'    => 'IT Bootcamp',
            'keyword_5'    => null,
            'cta_1'         => 'Konsultasi Gratis',
            'cta_2'         => 'Lihat Portofolio',
            'is_active'     => true
        ]);

        // Hero::create([
        //     'title'         => 'Dari Ide Menjadi Produk Digital yang Nyata',
        //     'description'   => '<i>Kami bantu bisnis Anda tumbuh lewat website, aplikasi mobile, dan SDM IT yang siap kerja lewat pelatihan bersertifikat</i>',
        //     'image'         => 'hero/hero-4.webp',
        //     'keyword_1'    => 'Website',
        //     'keyword_2'    => 'Mobile Apps',
        //     'keyword_3'    => 'Training',
        //     'keyword_4'    => 'Sertifikasi',
        //     'keyword_5'    => null,
        //     'cta_1'         => 'Hubungi Kami',
        //     'cta_2'         => 'Portfolio',
        //     'is_active'     => false,
        // ]);

        // Hero::create([
        //     'title'         => 'Wujudkan Transformasi Digital Bisnis Anda Bersama Kami',
        //     'description'   => '<i>Dari pembuatan website, aplikasi mobile, hingga pelatihan dan sertifikasi IT — kami hadir sebagai mitra teknologi tepercaya untuk pertumbuhan bisnis Anda.</i>',
        //     'image'         => 'hero/hero-4.webp',
        //     'keyword_1'    => 'Cepat',
        //     'keyword_2'    => 'Andal',
        //     'keyword_3'    => 'Profesional',
        //     'keyword_4'    => 'Terpercaya',
        //     'keyword_5'    => null,
        //     'cta_1'         => 'Mulai Konsultasi',
        //     'cta_2'         => 'Lihat Layanan Kami',
        //     'is_active'     => false,
        // ]);
    }
}
