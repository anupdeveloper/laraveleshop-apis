<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                'cat_id' => 1,
                'brand_id' => 1,
                'name' => 'LG Phone',
                'description' => 'A good product',
                'price' => '299',
                'image' => ''
                ],
                
                [
                    'cat_id' => 1,
                    'brand_id' => 1,
                    'name' => 'Samgsung Phone',
                    'description' => 'A good product',
                    'price' => '199',
                    'image' => ''
                ],
                [
                    'cat_id' => 1,
                    'brand_id' => 1,
                    'name' => 'Nokia Phone',
                    'description' => 'A good product',
                    'price' => '249',
                    'image' => ''
                ],
                [
                    'cat_id' => 1,
                    'brand_id' => 1,
                    'name' => 'ViVIO Phone',
                    'description' => 'A good product',
                    'price' => '260',
                    'image' => ''
                ]
            ]

    );
    }
}
