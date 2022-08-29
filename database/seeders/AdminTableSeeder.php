<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'Administrator',
            'email'=>'admin@flipkart.com',
            'password'=> Hash::make('password')
        ]);
        DB::table('admins')->insert([
            'name'=>'Administrator',
            'email'=>'support@flipkart.com',
            'password'=> Hash::make('password')
        ]);
    }
}
