<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Patient;


class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::insert([
            [
                'name'          =>'Caca',
                'address'       =>'Jl. A',
                'phone'         =>'0811111111',
                'hospital_id'   =>1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                'name'          =>'Surya',
                'address'       =>'Jl. B',
                'phone'         =>'0822222222',
                'hospital_id'   =>2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
        ]);
    }
}
