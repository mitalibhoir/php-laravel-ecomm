<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=> 'Oppo mobile',
                'price'=> 30000,
                'description'=>'A mobile with huge 8 GB RAM and smooth screen touch.',
                'category'=> 'mobile',
                'gallery'=> 'https://images.unsplash.com/photo-1562254492-377a3ac576f4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2940&q=80'
            ],
            [
                'name'=> 'Panasonic HD TV',
                'price'=> 75000,
                'description'=>'A smart tv with LED display.',
                'category'=> 'television',
                'gallery'=> 'https://media.gettyimages.com/id/182487084/photo/hd-tv-with-water-landscape-on-screen.jpg?s=1024x1024&w=gi&k=20&c=WuKAq6pTjrl26Jdz6_uFHrNyraAXfeHv3byprT6dEz8='
            ],
            [
                'name'=> 'Soni TV',
                'price'=> 30000,
                'description'=>'A LCD TV with great larger than life experience.',
                'category'=> 'television',
                'gallery'=> 'https://images.unsplash.com/photo-1595436921816-e5771cfb8d73?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2875&q=80'
            ],
            [
                'name'=> 'LG fridge',
                'price'=> 17000,
                'description'=>'A fridge with great cooling.',
                'category'=> 'refridgerator',
                'gallery'=> 'https://image3.mouthshut.com/images/Restaurant/Photo/-33204_87792.jpg'
            ]
    ]);
    }
}
