<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategoryUser;

class CategoryUserSd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_users = [
            [
                'id'                     => CategoryUser::ADMIN,
                'category_users_name'    => 'Administrador',  
            ],
            [
                'id'                     => CategoryUser::COMUM,
                'category_users_name'    => 'Comum',
            ],
        ];
        CategoryUser::insert($category_users);
    }
}
