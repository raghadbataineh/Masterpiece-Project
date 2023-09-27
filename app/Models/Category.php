<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'image',
    ];
    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
