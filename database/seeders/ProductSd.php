<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\ProductCategory;
use App\Models\Brand;
use App\Models\Product;

class ProductSd extends Seeder
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
                'product_name'             => 'iPhone X',
                'product_category_id'      => ProductCategory::SMARTPHONES, // 1
                'brand_id'                 => Brand::APPLE, // 1
            ],
            [
                'product_name'             => 'Samsung S20 FE',
                'product_category_id'      => ProductCategory::SMARTPHONES, // 1
                'brand_id'                 => Brand::SAMSUNG, // 2
            ],
            [
                'product_name'             => 'Apple Watch SE 2a Ger.',
                'product_category_id'      => ProductCategory::SMARTWATCHES, // 2
                'brand_id'                 => Brand::APPLE, // 1
            ],
            [
                'product_name'             => 'Smartwatch Samsung Galaxy',
                'product_category_id'      => ProductCategory::SMARTWATCHES, // 2
                'brand_id'                 => Brand::SAMSUNG, // 2
            ],
        ];
        Product::insert($products);
    }
}
