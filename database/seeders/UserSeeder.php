<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => (string) Str::uuid(),
            'first_name' => 'Matheus',
            'last_name' => 'Rufino',
            'email' => 'matheus@gmail.com',
            'document_type' => 'CPF',
            'document' => '07757148367',
            'password' => bcrypt('M@theus123456'),
        ]);
    }
}
