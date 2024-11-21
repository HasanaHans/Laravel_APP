<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HalwaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('halwa')->insert(['product' => 'Full English', 'description' => '2 Fried Eggs, 2 Slices of toast, Beans, 2 Sausages, and Mushrooms',  'Price' => 9.95]);
    }
}
