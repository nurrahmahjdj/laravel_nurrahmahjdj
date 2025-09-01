<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hospital::insert([
            ['name'=>'RS Dirac', 'address'=>'Jl. Sehat No.1', 'email'=>'rs@dirac.com', 'phone'=>'081234567890'],
            ['name'=>'RS Expert', 'address'=>'Jl. Jaya No.2', 'email'=>'rs@xxpert.com', 'phone'=>'081234567891'],
        ]);
    }
}
