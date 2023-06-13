<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public const APPLE = 1; 
    public const SAMSUNG = 2; 

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }
    protected $fillable = [
        'brand_name',
    ];
}
