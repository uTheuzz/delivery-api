<?php

namespace Database\Seeders;

use App\Models\AdditionCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class AdditionSeeder extends Seeder
{
    public function run()
    {

        $additions = [
            ['id' => Str::uuid(), 'name' => 'Calabresa', 'price' => 2.00, 'addition_category_id' => AdditionCategory::where('name', 'Escolha 2 Sabores')->first()->id],
            ['id' => Str::uuid(), 'name' => 'Frango', 'price' => 2.00, 'addition_category_id' => AdditionCategory::where('name', 'Escolha 2 Sabores')->first()->id],
            ['id' => Str::uuid(), 'name' => 'Mista', 'price' => null, 'addition_category_id' => AdditionCategory::where('name', 'Escolha 2 Sabores')->first()->id],
            ['id' => Str::uuid(), 'name' => 'Portuguesa', 'price' => null, 'addition_category_id' => AdditionCategory::where('name', 'Escolha 2 Sabores')->first()->id],
            ['id' => Str::uuid(), 'name' => 'Arretada', 'price' => 2.00, 'addition_category_id' => AdditionCategory::where('name', 'Escolha 2 Sabores')->first()->id],
            ['id' => Str::uuid(), 'name' => '4 Queijos', 'price' => 2.00, 'addition_category_id' => AdditionCategory::where('name', 'Escolha 2 Sabores')->first()->id],
            ['id' => Str::uuid(), 'name' => 'Mexidão', 'price' => 2.00, 'addition_category_id' => AdditionCategory::where('name', 'Escolha 2 Sabores')->first()->id],
            ['id' => Str::uuid(), 'name' => 'Palmito', 'price' => 2.00, 'addition_category_id' => AdditionCategory::where('name', 'Escolha 2 Sabores')->first()->id],
            ['id' => Str::uuid(), 'name' => 'Baconzila', 'price' => 2.00, 'addition_category_id' => AdditionCategory::where('name', 'Escolha 2 Sabores')->first()->id],
            ['id' => Str::uuid(), 'name' => 'Camaroa', 'price' => 2.00, 'addition_category_id' => AdditionCategory::where('name', 'Escolha 2 Sabores')->first()->id],

            ['id' => Str::uuid(), 'name' => 'Barbecue', 'price' => 1.50, 'addition_category_id' => AdditionCategory::where('name', 'Escolha 1 Molho')->first()->id],
            ['id' => Str::uuid(), 'name' => 'Maionese da temperada', 'price' => 1.25, 'addition_category_id' => AdditionCategory::where('name', 'Escolha 1 Molho')->first()->id],


            ['id' => Str::uuid(), 'name' => 'Batata Frita', 'price' => 5.00, 'addition_category_id' => AdditionCategory::where('name', 'Acompanhamentos')->first()->id],
            ['id' => Str::uuid(), 'name' => 'Camarão empanado', 'price' => 10.00, 'addition_category_id' => AdditionCategory::where('name', 'Acompanhamentos')->first()->id],


            ['id' => Str::uuid(), 'name' => 'Coca-Cola', 'price' => 5.00, 'addition_category_id' => AdditionCategory::where('name', 'Bebida')->first()->id],
            ['id' => Str::uuid(), 'name' => 'Limonada', 'price' => 3.50, 'addition_category_id' => AdditionCategory::where('name', 'Bebida')->first()->id],

            ['id' => Str::uuid(), 'name' => 'Sorvete', 'price' => 4.00, 'addition_category_id' => AdditionCategory::where('name', 'Sobremesa')->first()->id],
            ['id' => Str::uuid(), 'name' => 'Pudim', 'price' => 4.00, 'addition_category_id' => AdditionCategory::where('name', 'Sobremesa')->first()->id],
        ];

        DB::table('additions')->insert($additions);
    }
}
