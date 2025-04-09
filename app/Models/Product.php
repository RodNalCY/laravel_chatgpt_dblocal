<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'video',
        'location',
        'stock',
        'price',
        'discount_price',
        'currency',
        'category',
        'sku',
        'url',
        'active'
    ];
}
