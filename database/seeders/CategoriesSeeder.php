<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id' => (string) Str::uuid(),
                'name' => 'Entradas',
                'description' => 'Deliciosas entradas para começar a refeição.',
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Pratos Principais',
                'description' => 'Pratos principais variados e saborosos.',
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Sobremesas',
                'description' => 'Sobremesas doces para finalizar a refeição.',
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Bebidas',
                'description' => 'Variedade de bebidas para acompanhar a refeição.',
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Saladas',
                'description' => 'Frescas e saudáveis saladas.',
            ],
        ];

        DB::table('product_categories')->insert($categories);
    }
}
