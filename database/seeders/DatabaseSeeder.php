<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(HospitalSeeder::class);
        $this->call(PatientSeeder::class);
        
        User::create([
            'username' => 'admin',
            'password' => Hash::make('12345678'),
        ]);
    }
}
