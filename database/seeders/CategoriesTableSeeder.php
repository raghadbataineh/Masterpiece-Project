<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Resturents ',
            'description' => 'all the resturents in mall',
            'image' => 'food.png',
        ]);
        Category::create([
            'name' => 'Banks',
            'description' => 'all the banks in mall',
            'image' => 'bank.jpg',
        ]);
        Category::create([
            'name' => 'Optics',
            'description' => 'the shops of optics in mall',
            'image' => 'optics.png',
        ]);
        Category::create([
            'name' => 'Shoes and bags',
            'description' => 'Shoes and bags in mall',
            'image' => 'shoes.png',
        ]);
        Category::create([
            'name' => 'Electonics',
            'description' => 'electonics shops in mall',
            'image' => 'electonics.jpg',
        ]);

    }
    
}
