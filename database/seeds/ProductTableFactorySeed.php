<?php

use Illuminate\Database\Seeder;

class ProductTableFactorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 50)->create();
    }
}
