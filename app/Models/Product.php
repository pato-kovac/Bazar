<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'product_category',
        'product_name',
        'product_images',
        'product_description',
        'product_price',
        'publisher_email',
        'created_at'
    ];
    public $timestamps = false;
}
