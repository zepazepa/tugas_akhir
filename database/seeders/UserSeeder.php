<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
        [
            'name' => 'Zefanya',
            'email' => 'zefa@mail.com',
            'password' => Hash::make('12345678'),
        ],
        [
            'name' => 'Bukan Zefa',
            'email' => 'bukan@mail.com',
            'password' => Hash::make('12345678'),
        ],
        [
            'name' => 'Pasti Zefa',
            'email' => 's160421033@student.ubaya.ac.id',
            'password' => Hash::make('12345678'),
        ],
    ]);
    }
}
