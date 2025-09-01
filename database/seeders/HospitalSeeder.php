<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hospital;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hospital::insert([
            [
                'name'      =>'RS Dirac',
                'address'   =>'Jl. Sehat No.1',
                'email'     =>'rs@dirac.com',
                'phone'     =>'081234567890',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name'      =>'RS Expert',
                'address'   =>'Jl. Jaya No.2',
                'email'     =>'rs@xxpert.com',
                'phone'     =>'081234567891',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
