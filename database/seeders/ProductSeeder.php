<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
        [
            'name'=> 'LG Mobile',
            'price'=> '10000',
            'category'=> 'mobile',
            'description'=> 'A good smartphone product'
        ],
        [
            'name'=> 'Fan',
            'price'=> '1000',
            'category'=> 'Appliances',
            'description'=> 'A good product'
        ],
        [
            'name'=> 'Samsung Mobile',
            'price'=> '12000',
            'category'=> 'mobile',
            'description'=> 'A good product by samsung.'
        ]
    ]);
    }
}
