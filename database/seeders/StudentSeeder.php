<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->studentPertama();
    }

    public function studentPertama()
    {
        User::create([
            'name' => 'sulaiman misri',
            'email' => 'sulaiman@asiaquest.my',
            'role' => 'student',
            'password' => bcrypt('password'),
        ]);
    }
}