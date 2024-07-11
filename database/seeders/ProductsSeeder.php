<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $categories = DB::table('product_categories')->pluck('id', 'name');

        $products = [
            [
                'id' => (string) Str::uuid(),
                'name' => 'Bruschetta',
                'category_id' => $categories['Entradas'],
                'description' => 'Pão torrado com tomate, manjericão e azeite.',
                'image' => 'bruschetta.jpg',
                'price' => 15.39,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Salada Caesar',
                'category_id' => $categories['Saladas'],
                'description' => 'Salada com alface, croutons, parmesão e molho Caesar.',
                'image' => 'salada_caesar.jpg',
                'price' => 25.00,
                'discount_price' => 20.00,
                'discount_percent' => 20,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Spaghetti Carbonara',
                'category_id' => $categories['Pratos Principais'],
                'description' => 'Massa italiana com molho de ovos, queijo e pancetta.',
                'image' => 'spaghetti_carbonara.jpg',
                'price' => 45.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Tiramisu',
                'category_id' => $categories['Sobremesas'],
                'description' => 'Sobremesa italiana com camadas de biscoito, café e mascarpone.',
                'image' => 'tiramisu.jpg',
                'price' => 20.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Caipirinha',
                'category_id' => $categories['Bebidas'],
                'description' => 'Bebida típica brasileira feita com cachaça, limão e açúcar.',
                'image' => 'caipirinha.jpg',
                'price' => 18.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Filet Mignon ao Molho Madeira',
                'category_id' => $categories['Pratos Principais'],
                'description' => 'Filé mignon com molho madeira e acompanhamentos.',
                'image' => 'filet_mignon.jpg',
                'price' => 65.00,
                'discount_price' => 60.00,
                'discount_percent' => 8,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Ceviche',
                'category_id' => $categories['Entradas'],
                'description' => 'Peixe cru marinado em suco de limão com cebola e coentro.',
                'image' => 'ceviche.jpg',
                'price' => 30.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Pavlova',
                'category_id' => $categories['Sobremesas'],
                'description' => 'Sobremesa com base de merengue e frutas frescas.',
                'image' => 'pavlova.jpg',
                'price' => 22.25,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Suco Natural de Laranja',
                'category_id' => $categories['Bebidas'],
                'description' => 'Suco feito com laranjas frescas e naturais.',
                'image' => 'suco_laranja.jpg',
                'price' => 12.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Ravioli de Ricota',
                'category_id' => $categories['Pratos Principais'],
                'description' => 'Massa recheada com ricota e espinafre, servida com molho de tomate.',
                'image' => 'ravioli_ricota.jpg',
                'price' => 40.00,
                'discount_price' => 35.00,
                'discount_percent' => 12,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Pão de Alho',
                'category_id' => $categories['Entradas'],
                'description' => 'Pão assado com manteiga de alho e ervas.',
                'image' => 'pao_de_alho.jpg',
                'price' => 10.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Cheesecake de Morango',
                'category_id' => $categories['Sobremesas'],
                'description' => 'Cheesecake com calda de morango e base crocante.',
                'image' => 'cheesecake.jpg',
                'price' => 25.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Lasanha à Bolonhesa',
                'category_id' => $categories['Pratos Principais'],
                'description' => 'Lasanha recheada com carne moída, molho de tomate e queijo.',
                'image' => 'lasanha.jpg',
                'price' => 55.00,
                'discount_price' => 50.00,
                'discount_percent' => 9,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Mojito',
                'category_id' => $categories['Bebidas'],
                'description' => 'Coquetel refrescante feito com rum, hortelã e limão.',
                'image' => 'mojito.jpg',
                'price' => 20.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Tabule',
                'category_id' => $categories['Saladas'],
                'description' => 'Salada de trigo, tomate, pepino, salsinha e hortelã.',
                'image' => 'tabule.jpg',
                'price' => 18.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Café Expresso',
                'category_id' => $categories['Bebidas'],
                'description' => 'Café expresso feito com grãos selecionados.',
                'image' => 'cafe_expresso.jpg',
                'price' => 8.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Risoto de Cogumelos',
                'category_id' => $categories['Pratos Principais'],
                'description' => 'Risoto cremoso com cogumelos frescos.',
                'image' => 'risoto_cogumelos.jpg',
                'price' => 48.00,
                'discount_price' => 45.00,
                'discount_percent' => 6,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Mousse de Chocolate',
                'category_id' => $categories['Sobremesas'],
                'description' => 'Mousse cremosa de chocolate com raspas de chocolate.',
                'image' => 'mousse_chocolate.jpg',
                'price' => 15.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Smoothie de Morango',
                'category_id' => $categories['Bebidas'],
                'description' => 'Bebida refrescante feita com morangos frescos.',
                'image' => 'smoothie_morango.jpg',
                'price' => 18.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
            [
                'id' => (string) Str::uuid(),
                'name' => 'Polenta Frita',
                'category_id' => $categories['Entradas'],
                'description' => 'Polenta frita crocante por fora e macia por dentro.',
                'image' => 'polenta_frita.jpg',
                'price' => 12.00,
                'discount_price' => null,
                'discount_percent' => null,
            ],
        ];

        DB::table('products')->insert($products);

        $product = Product::where('name', 'Bruschetta')->first();
        $additionCategories = DB::table('addition_categories')->where('global', false)->pluck('id')->toArray();
        $product->additionCategories()->sync($additionCategories);
    }
}
