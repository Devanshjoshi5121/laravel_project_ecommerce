<?php

namespace App\Models;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
    'category_id',
    'name',
    'slug',
    'brand',
    'small_description',
    'description',
    'original_price',
    'selling_price',
    'quantity',
    'trending',
    'status',
    'meta_title',
    'meta_keyyword',
    'meta_description',
    ];

    public function productImages(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
