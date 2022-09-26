<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'name'=> '150ml bottle',
                'description'=> 'good condition',
                'price'=>'1500',
                'quantity'=>'15',
                'catogery'=>'bottle',
                'gallery'=>'images/150ml bottle.jpg'
            ],
            [
                'name'=> 'Deluxe baby bather blue',
                'description'=> 'good condition',
                'price'=>'5600',
                'quantity'=>'8',
                'catogery'=>'bather',
                'gallery'=>'images/Deluxe baby bather blue.jpg'
            ],
            [
                'name'=> 'Deluxe baby bather orange',
                'description'=> 'good condition',
                'price'=>'8560',
                'quantity'=>'18',
                'catogery'=>'bather',
                'gallery'=>'images/Deluxe baby bather orange.jpg'
            ],
            [
                'name'=> 'Dermoplex calamine cream',
                'description'=> 'good condition',
                'price'=>'2500',
                'quantity'=>'15',
                'catogery'=>'cream',
                'gallery'=>'images/Dermoplex calamine cream.jpg'
            ]
        ]);
    }
}
