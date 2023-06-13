<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Brand;

class BrandSd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            [
                'brand_name'                => 'Apple',
            ],
            [
                'brand_name'                => 'Samsung',
            ],
        ];
        Brand::insert($brands);
    }
}
