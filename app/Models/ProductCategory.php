<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public const SMARTPHONES = 1; 
    public const SMARTWATCHES = 2; 

    public function products()
    {
        return $this->hasMany(Product::class, 'product_category_id');
    }
    protected $fillable = [
        'product_category_name',
    ];
}
