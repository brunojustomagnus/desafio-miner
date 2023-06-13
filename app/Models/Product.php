<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categoryProduct()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    protected $fillable = [
        'product_name',
        'product_category_id',
        'brand_id',
    ];
}
