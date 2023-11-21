<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Shop::create([
            'name' => 'Ocean',
            'description' => 'Do you feel like eating from Ocean Restaurant? Take a look at the menu, order your favorite meal and get it delivered to you Ocean Lebanese & Seafood, Amman, Jordan. A premium restaurant that offers seafood for fish lovers and amazing.',
            'image' => 'ocean1.jpg',
            'image1' => 'ocean2.jpg',
            'image2' => 'ocean1.jpg',
            'image3' => 'oceanfood.jpg',
            'location' => 'First Floor',
            'phone' => '0781234556',
            'hasproducts' => 1,

            'opening_hours' => '10:00',
            'floor_id' => 2,
            'category_id' => 1,
        ]);
    
        Shop::create([
            'name' => 'Delicious Delights',
            'description' => 'Indulge in a wide variety of scrumptious dishes at Delicious Delights. Savor the flavors and enjoy a delightful dining experience.',
            'image' => 'delicious1.jpg',
            'image1' => 'delicious2.jpg',
            'image2' => 'delicious3.jpg',
            'image3' => 'deliciousfood.jpg',
            'location' => 'Second Floor',
            'hasproducts' => 1,

            'phone' => '0789876543',
            'opening_hours' => '11:00',
            'floor_id' => 2,
            'category_id' => 1,
        ]);
        
        Shop::create([
            'name' => 'Tasty Treats Cafe',
            'description' => 'Visit Tasty Treats Cafe for a delightful coffee and pastry experience. We offer a wide selection of coffee, tea, and sweet treats.',
            'image' => 'tasty1.jpg',
            'image1' => 'tasty2.jpg',
            'image2' => 'tasty3.jpg',
            'image3' => 'tastyfood.jpg',
            'location' => 'Ground Floor',
            'hasproducts' => 1,

            'phone' => '0798765432',
            'opening_hours' => '08:30',
            'floor_id' => 2,
            'category_id' => 1,
        ]);
        
        Shop::create([
            'name' => 'Burger Haven',
            'description' => 'Craving a delicious burger? Look no further than Burger Haven. We serve mouthwatering burgers that will satisfy your hunger.',
            'image' => 'burger1.jpg',
            'image1' => 'burger2.jpg',
            'image2' => 'burger3.jpeg',
            'image3' => 'burgerfood.jpeg',
            'location' => 'Food Court',
            'hasproducts' => 1,

            'phone' => '0787654321',
            'opening_hours' => '10:30',
            'floor_id' => 2,
            'category_id' => 1,
        ]);

        // More "Shoes and Bags" Category Shops
Shop::create([
    'name' => 'Fashion Footwear',
    'description' => 'Discover the latest in shoes and bags fashion at Fashion Footwear. We offer a wide range of stylish and comfortable footwear and trendy bags.',
    'image' => 'shoesbags1.jpg',
    'image1' => 'shoesbags2.jpg',
    'image2' => 'shoesbags3.jpg',
    'image3' => 'shoesbags4.jpg',
    'location' => 'Mall Street',
    'hasproducts' => 0,

    'phone' => '0796543210',
    'opening_hours' => '09:30',
    'floor_id' => 3,
    'category_id' => 4,
]);

Shop::create([
    'name' => 'Bag Emporium',
    'description' => 'Bag lovers unite! Bag Emporium offers a stunning collection of bags for all occasions. Find the perfect bag for your style here.',
    'image' => 'bag1.jpg',
    'image1' => 'bag2.jpg',
    'image2' => 'bag3.jpg',
    'image3' => 'bag4.jpg',
    'location' => 'Fashion Avenue',
    'hasproducts' => 0,

    'phone' => '0787654321',
    'opening_hours' => '10:00',
    'floor_id' => 3,
    'category_id' => 4,
]);

// "Bank" Category Shop
Shop::create([
    'name' => 'Bank of Prosperity',
    'description' => 'Bank of Prosperity is your financial partner. Visit us for a wide range of banking services, from savings accounts to loans and investments.',
    'image' => 'bank1.jpg',
    'image1' => 'bank2.jpg',
    'image2' => 'bank3.jpg',
    'image3' => 'bank4.jpg',
    'location' => 'Finance Street',
    'hasproducts' => 0,

    'phone' => '0790123456',
    'opening_hours' => '09:00',
    'floor_id' => 1,
    'category_id' => 2,
]);

// "Electronics" Category Shops
Shop::create([
    'name' => 'Gadget Galaxy',
    'description' => 'Explore the latest in electronics at Gadget Galaxy. From smartphones to laptops and accessories, we have it all for tech enthusiasts.',
    'image' => 'gadget1.jpg',
    'image1' => 'gadget2.jpg',
    'image2' => 'gadget3.jpg',
    'image3' => 'gadget4.jpg',
    'location' => 'Tech Hub',
    'hasproducts' => 0,

    'phone' => '0789876543',
    'opening_hours' => '10:30',
    'floor_id' => 1,
    'category_id' => 5,
]);

Shop::create([
    'name' => 'Appliance World',
    'description' => 'Upgrade your home with the latest appliances from Appliance World. Find top-quality kitchen and home appliances for a modern lifestyle.',
    'image' => 'appliance1.jpg',
    'image1' => 'appliance2.jpg',
    'image2' => 'appliance3.jpg',
    'image3' => 'appliance4.jpg',
    'location' => 'Electronics Avenue',
    'hasproducts' => 0,
    'phone' => '0798765432',
    'opening_hours' => '10:00',
    'floor_id' => 1,
    'category_id' => 5,
]);
Shop::create([
    'name' => 'Crystal Clear Optics',
    'description' => 'See the world with clarity at Crystal Clear Optics. We offer a wide range of eyeglasses, sunglasses, and contact lenses to suit your vision needs.',
    'image' => 'optics1.jpg',
    'image1' => 'optics2.jpg',
    'image2' => 'optics3.jpg',
    'image3' => 'optics4.jpg',
    'location' => 'Eyewear Street',
    'hasproducts' => 0,
    'phone' => '0781234567',
    'opening_hours' => '10:00',
    'floor_id' => 3,
    'category_id' => 3,
]);


        
    }
}
