<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Samsung Galaxy S10',
                'description' => 'Samsung Brand',
                'image' => 'https://dummyimage.com/250x250/000/fff&text=Samsung',
                'price' => 100
            ],
            [
                'name' => 'Apple iPhone X',
                'description' => 'Apple Brand',
                'image' => 'https://dummyimage.com/250x250/000/fff&text=Iphone',
                'price' => 500
            ],
            [
                'name' => 'Google Pixel 3 XL',
                'description' => 'Google Pixel Brand',
                'image' => 'https://dummyimage.com/250x250/000/fff&text=Google',
                'price' => 400
            ],
            [
                'name' => 'LG V50 ThinQ 5G',
                'description' => 'LG Brand',
                'image' => 'https://dummyimage.com/250x250/000/fff&text=LG',
                'price' => 200
            ]
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
