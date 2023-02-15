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
        //
        DB::table('products')->insert([
        [
            'name'=> 'White Parka',
            'price'=> '120',
            'description'=>'Finnel White Parka, Valorant esport team uniform',
            'category'=> 'uniform',
            'gallery'=>'https://cdn.shopify.com/s/files/1/0420/3141/5455/products/2022ss_ll1.jpg?v=1646199782'
        ],
        [
            'name'=> 'Sweat Pants',
            'price'=> '80',
            'description'=>'Jersey sweatpants',
            'category'=> 'bottoms',
            'gallery'=>'https://cdn.shopify.com/s/files/1/0420/3141/5455/products/210610_tee_o2.jpg?v=1672034682'
        ],
        [
            'name'=> 'Hat',
            'price'=> '60',
            'description'=>'Kenstumenshi Hat',
            'category'=> 'accessories',
            'gallery'=>'https://cdn.shopify.com/s/files/1/0420/3141/5455/products/220824_s1.jpg?v=1661320562'
        ],
        [
            'name'=> 'Finnel Bucket Hat',
            'price'=> '90',
            'description'=>'Finnel bucket hat with logo',
            'category'=> 'accessories',
            'gallery'=>'https://cdn.shopify.com/s/files/1/0420/3141/5455/products/211002_t1.jpg?v=1632895446'
        ]
    ]);
    }
}
