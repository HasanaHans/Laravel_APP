<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert(['name' => 'Hasan', 'phone_number' =>'07555200672',]);
        DB::table('customers')->insert(['name' => 'moosa', 'phone_number' =>'07555200673', ]);
        DB::table('customers')->insert(['name' => 'Desai', 'phone_number' =>'07555200674', ]);
    }
}
