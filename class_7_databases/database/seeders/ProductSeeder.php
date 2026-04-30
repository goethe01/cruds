<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Product::create([
        //     'name'=> 'Example',
        //     'short_description'=>'Lorem ipsum',
        //     'description'=>'Lorem ipsum dolor set aimet',
        //     'price'=>25
        // ]);
        // Product::create([
        //     'name'=> 'Example2',
        //     'short_description'=>'Lorem ipsum',
        //     'description'=>'Lorem ipsum dolor set aimet',
        //     'price'=>42
        // ]);
        // Product::create([
        //     'name'=> 'Example3',
        //     'short_description'=>'Lorem ipsum',
        //     'description'=>'Lorem ipsum dolor set aimet',
        //     'price'=>60
        // ]);

        //Utilizar el factory para crear productos
        Product::factory()->count(150)->create();
    }
}
