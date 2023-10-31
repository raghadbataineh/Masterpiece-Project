<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Floor;

class FloorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Floor::create(
            [
                'floor_name'=>'Ground Floor',
                'floor_image'=>'groundfloor1.png',
            ]

            );
        Floor::create(
            [
                'floor_name'=>'First Floor',
                'floor_image'=>'firstfloor1.png',
            ]

            );
        Floor::create(
            [
                'floor_name'=>'Seconed Floor',
                'floor_image'=>'seconedfloor2.png',
            ]

            );
    }
}
