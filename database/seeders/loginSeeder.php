<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('login')->insert([
            [
                'name'=> 'irshad barber',
                'email'=> 'irshad@gmail',
                'password' => Hash::make('1234')

            ],
            [
                'name'=> 'rizam thanveer',
                'email'=> 'rizam@gmail',
                'password'=> Hash::make('1234')
            ]
        ]);
      }
    }
