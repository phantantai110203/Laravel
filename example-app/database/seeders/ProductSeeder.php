<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  @return void
     */
    public function run()
    {
        //
        Category::where('name','Laptop')->first()->products()->createMany([
           
            [
                'name'=>'San Pham 1',
                'price'=>1000000,
                'image'=>'',
                'desc'=>'Mo ta san pham 1'
            
            ],
            [
                'name'=>'San Pham 2',
                'price'=>2000000,
                'image'=>'',
                'desc'=>'Mo ta san pham 2'
            
            ],
            [
                'name'=>'San Pham 3',
                'price'=>3000000,
                'image'=>'',
                'desc'=>'Mo ta san pham 3'
                
            ]
        ]);
    }
}