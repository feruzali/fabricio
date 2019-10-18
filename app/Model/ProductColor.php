<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    protected $fillable = [
        'name', 'colorHEX'
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_color_id', 'id');
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
