<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;


class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'description', 'price', 'image', 'shop_id',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class );
    }
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    
}

