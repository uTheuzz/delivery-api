<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class AdditionCategoriesSeeder extends Seeder
{
    public function run()
    {

        $additionCategories = [
            ['id' => Str::uuid(), 'name' => 'Escolha 2 Sabores', 'description' => 'Escolha até 2 sabores.', 'max_selection' => 2, 'required' => true, 'global' => false, 'addition_type' => 'checkbox'],
            ['id' => Str::uuid(), 'name' => 'Escolha 1 Molho', 'description' => 'Escolha um molho.', 'max_selection' => 1, 'required' => false, 'global' => false, 'addition_type' => 'radio'],
            ['id' => Str::uuid(), 'name' => 'Acompanhamentos', 'description' => 'Escolha seus acompanhamentos.', 'max_selection' => 20, 'required' => false, 'global' => false, 'addition_type' => 'checkbox'],
            ['id' => Str::uuid(), 'name' => 'Bebida', 'description' => 'Escolha sua bebida.', 'max_selection' => 1, 'required' => false, 'global' => true, 'addition_type' => 'radio'],
            ['id' => Str::uuid(), 'name' => 'Sobremesa', 'description' => 'Escolha sua sobremesa.', 'max_selection' => 20, 'required' => true, 'global' => true, 'addition_type' => 'counter'],
        ];

        DB::table('addition_categories')->insert($additionCategories);
    }
}
