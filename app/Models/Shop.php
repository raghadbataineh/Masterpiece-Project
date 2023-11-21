<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Category;
use App\Models\Product;
use App\Models\Floor;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'location', 'phone', 'opening_hours','image','image1','image2','image3','description','hasproducts'
    ];
    

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }
}
