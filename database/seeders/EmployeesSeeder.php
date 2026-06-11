<?php

namespace Database\Seeders;

use App\Models\Employees;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeesSeeder extends Seeder
{
    public function run(): void
    {
        Employees::truncate();

        Employees::create([
            'full_name'     => 'PT. Teknologi Karya Anak Bangsa',
            'role'          => 'Administrator',
            'email'         => 'admin.tkab@gmail.com',
            'password'      => Hash::make('12341234'),
            'status_data'   => 'Active',
        ]);

        // Employees::create([
        //     'full_name'     => 'Aryajaya Alamsyah',
        //     'role'          => 'Senior Programmer',
        //     'email'         => 'aryajayaalamsyah@gmail.com',
        //     'password'      => Hash::make('12341234'),
        //     'status_data'   => 'Active',
        // ]);
    }
}
