<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;
use App\Models\Shop;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'shop_id',
        'product_id',
        'quantity',
        'order_status',
        'address',
        'city',
        'payment_method',
        'subtotal',
        'delivery',
        'total',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
