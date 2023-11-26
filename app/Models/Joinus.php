<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joinus extends Model
{
    use HasFactory;
    protected $fillable = [
        'shop_name',
        'shop_phone',
        'shop_description',
        'owner_name',
        'owner_phone',
        'owner_email',
        'product_description',
        'product_categories',
    ];
}
