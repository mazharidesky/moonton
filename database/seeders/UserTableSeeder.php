<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat role
        $admin = user::create([
            'name' => 'Admin',
            'email' => 'admin@moonton.test',
            'password' => bcrypt('password'),
        ]);

        // memanggil role di atas
        $admin->assignRole('admin');
    }
}
