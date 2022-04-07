<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => Str::random(10),
            'location' => Str::random(10),
            'selling_price' =>Str::random(10).'$',
            'purchase_price' => Str::random(10).'$',
            'category' => Str::random(10),
            'stock' => Str::random(10),
            'brand' => Str::random(10),
            'info' => Str::random(10),
         
        ]);
    }
}
