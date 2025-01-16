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
        DB::table('halwa')->insert(['product' => 'Full Desi', 'description' => '1 Paratha, 1 Omlette, Beans, Chana, and Halwa',  'Price' => 9.95]);
        DB::table('halwa')->insert(['product' => 'Desi English', 'description' => '2 Toast, 1 Omlette, Beans, 2 Sausages, and Mushrooms',  'Price' => 9.95]);
        DB::table('halwa')->insert(['product' => 'Chana Halwa Puri', 'description' => '2 Puri, 1 Chana, 1 Halwa, 2 Puri',  'Price' => 6.50]);
        DB::table('halwa')->insert(['product' => 'Egg Toastie', 'description' => 'Cheesy Omlette Toasty with spices',  'Price' => 6.50]);
        DB::table('halwa')->insert(['product' => 'Desi Bap', 'description' => 'Cheesy Omlette, Hashbrown, Cheese and Sauces in a Bap',  'Price' => 7.50]);
    }
}
