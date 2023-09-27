<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;

class Floor extends Model
{
    use HasFactory;
    protected $fillable = [
        'floor_name', 'floor_image'
    ];
    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
    
}
