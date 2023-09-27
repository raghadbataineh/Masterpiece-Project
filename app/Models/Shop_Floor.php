<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Floor;
use App\Models\Shop;

class Shop_Floor extends Model
{
    use HasFactory;
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function floor()
    {
        return $this->belongsTo(Floor::class);
    }
}
