<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
   
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $products = [
            [
            'name' => 'JS Samsung Galaxy',
            'description' => 'Samsung',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
            'price' => 100
            ],
            [
            'name' => 'Apple iPhone 16',
            'description' => 'Apple',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
            'price' => 500
            ],
            [
            'name' => 'Google Goose 2 XL',
            'description' => 'Google ',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=Google',
            'price' => 400
            ],
            [
            'name' => 'Samsung V10 H800',
            'description' => 'Samsung Brand',
            'image' => 'https://dummyimage.com/200x300/000/fff&text=LG',
            'price' => 200
            ]
            ];
           
            foreach ($products as $key => $value) {
            Product::create($value);
            }
    }
}
