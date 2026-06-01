<?php

namespace Database\Seeders;

use App\Models\Services;
use App\Models\ServicesFeatures;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;


class ServicesSeeder extends Seeder
{
    public function run(): void
    {
        # ...
        Schema::disableForeignKeyConstraints();
        ServicesFeatures::query()->forceDelete();
        Services::query()->forceDelete();
        Schema::enableForeignKeyConstraints();


        # -------------------------------------------------------------------------- #
        # insert data                                                                #
        # -------------------------------------------------------------------------- #
        $services = [

            # -------------------------------------------------------------------------- #
            # web development                                                            #
            # -------------------------------------------------------------------------- #
            [
                'icon'         => 'bi bi-display',
                'category'     => 'SOFTWARE DEVELOPMENT',
                'title'        => 'Custom Web Development',
                'description'  => 'Kami membantu bisnis membangun website dan sistem web modern yang cepat, responsif, aman, dan scalable sesuai kebutuhan perusahaan Anda.',
                'tech_stack'   => 'Laravel • ReactJS • NodeJS • Bootstrap • MySQL',
                'slug'         => Str::slug('Custom Web Development'),
                'sort_order'   => 1,
                'status_data'  => 'Active',
                'features' => [
                    'Company Profile Website',
                    'Custom Dashboard & ERP',
                    'E-Commerce Development',
                    'Landing Page Optimization',
                ],
            ],

            # -------------------------------------------------------------------------- #
            # mobile development                                                         #
            # -------------------------------------------------------------------------- #
            [
                'icon'         => 'bi bi-phone',
                'category'     => 'SOFTWARE DEVELOPMENT',
                'title'        => 'Android & IOS Development',
                'description'  => 'Pengembangan aplikasi mobile modern untuk Android dan iOS dengan performa tinggi, user experience optimal, dan integrasi sistem yang fleksibel.',
                'tech_stack'   => 'Flutter • Firebase • REST API',
                'slug'         => Str::slug('Android & iOS Development'),
                'sort_order'   => 2,
                'status_data'  => 'Active',
                'features' => [
                    'Android & iOS Apps',
                    'API Integration',
                    'Realtime Features',
                    'UI/UX Mobile Design',
                ],
            ],

            # -------------------------------------------------------------------------- #
            # training & bootcamp                                                        #
            # -------------------------------------------------------------------------- #
            [
                'icon'         => 'bi bi-mortarboard',
                'category'     => 'LEARNING CENTER',
                'title'        => 'IT Training & IT Bootcamp',
                'description'  => 'Program pelatihan dan bootcamp IT untuk siswa, mahasiswa, maupun perusahaan yang ingin meningkatkan skill digital dan teknologi modern.',
                'tech_stack'   => 'Laravel • Flutter • Git • UI/UX',
                'slug'         => Str::slug('Training & IT Bootcamp'),
                'sort_order'   => 3,
                'status_data'  => 'Active',
                'features' => [
                    'Web Development Training',
                    'Laravel Bootcamp',
                    'Corporate IT Training',
                    'Project-Based Learning',
                ],
            ],
        ];


        # -------------------------------------------------------------------------- #
        # insert data                                                                #
        # -------------------------------------------------------------------------- #
        foreach ($services as $serviceData) {
            $service = Services::create([

                'icon'         => $serviceData['icon'],
                'category'     => $serviceData['category'],
                'title'        => $serviceData['title'],
                'description'  => $serviceData['description'],
                'tech_stack'   => $serviceData['tech_stack'],
                'slug'         => $serviceData['slug'],
                'sort_order'   => $serviceData['sort_order'],
                'status_data'  => $serviceData['status_data'],
            ]);

            foreach ($serviceData['features'] as $index => $feature) {
                ServicesFeatures::create([
                    'id_services' => $service->id_services,
                    'features'    => $feature,
                    'sort_order'  => $index + 1,
                    'status_data' => 'Active',
                ]);
            }
        }
    }
}
