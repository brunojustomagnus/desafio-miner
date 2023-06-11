<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryUser extends Model
{
    use HasFactory;
    public const ADMIN = 1; 
    public const COMUM = 2; 

    // Adicione o seguinte método na classe User do seu model
    public function users()
    {
        return $this->hasMany(User::class, 'user_category_id');
    }
}
