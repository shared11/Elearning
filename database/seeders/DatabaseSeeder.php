<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = [
            [
               'username' => 'admin',
               'name'=>'Akun Admin',
               'nik'=>'111111111111',
               'level'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
               'username' => 'user',
               'name'=>'Akun User',
               'nik'=>'112233445566',
               'level'=>'user',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
