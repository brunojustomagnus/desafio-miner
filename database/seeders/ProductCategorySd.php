<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\ProductCategory;

class ProductCategorySd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_categories = [
            [
                'product_category_name'   => 'Smartphones',
            ],
            [
                'product_category_name'   => 'Smartwatches',
            ],
        ];
        ProductCategory::insert($product_categories);
    }
}
