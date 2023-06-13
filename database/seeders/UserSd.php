<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\CategoryUser;
use App\Models\User;

class UserSd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'user_name'                => 'Admin',
                'user_category_id'         => CategoryUser::ADMIN, // 1
                'email'                    => 'admin@teste',   
                'password'                 => Hash::make('teste123'),
            ],
            [
                'user_name'                => 'Gerente',
                'user_category_id'         => CategoryUser::GERENTE, // 2
                'email'                    => 'gerente@teste',   
                'password'                 => Hash::make('teste123'),
            ],
            [
                'user_name'                => 'Comum',
                'user_category_id'         => CategoryUser::COMUM, // 3
                'email'                    => 'comum@teste',   
                'password'                 => Hash::make('teste123'),
            ],
        ];
        User::insert($users);
    }
}
