<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //商品登録
        Product::create([
            'name' => 'ノートPC',
            'price' => '120000',
            'stock' => '10',
            'category' => '電子機器',
        ]);

        Product::create([
            'name' => 'マウス',
            'price' => '2000',
            'stock' => '50',
            'category' => '電子機器',
        ]);

        Product::create([
            'name' => 'キーボード',
            'price' => '5000',
            'stock' => '30',
            'category' => '電子機器',
        ]);

        Product::create([
            'name' => 'デスク',
            'price' => '25000',
            'stock' => '5',
            'category' => '家具',
        ]);

        Product::create([
            'name' => 'チェア',
            'price' => '15000',
            'stock' => '8',
            'category' => '家具',
        ]);
    }
}
