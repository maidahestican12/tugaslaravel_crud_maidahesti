<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\Student;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed users
        \App\Models\User::factory(10)->create();

        // Seed students
        \App\Models\Student::factory(10)->create();

        // Seed classes (Kelas)
        Kelas::create(['nama' => '10 PPLG 1']);
        Kelas::create(['nama' => '10 PPLG 2']);
        Kelas::create(['nama' => '11 PPLG 1']);
        Kelas::create(['nama' => '11 PPLG 2']);
        Kelas::create(['nama' => '12 PPLG 1']);
        Kelas::create(['nama' => '12 PPLG 2']);
    }
}
