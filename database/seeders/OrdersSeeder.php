<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert(['item_id' => 1, 'user_id' => 1, 'quantity'=> 4]);
        DB::table('orders')->insert(['item_id' => 2, 'user_id' => 1, 'quantity'=> 2]);
        DB::table('orders')->insert(['item_id' => 4, 'user_id' => 1, 'quantity'=> 1]);
        DB::table('orders')->insert(['item_id' => 2, 'user_id' => 3, 'quantity'=> 1]);
        DB::table('orders')->insert(['item_id' => 3, 'user_id' => 3, 'quantity'=> 1]);
    }
}
