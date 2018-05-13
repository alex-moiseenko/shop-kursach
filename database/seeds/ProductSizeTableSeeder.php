<?php

use Illuminate\Database\Seeder;

class ProductSizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_size')->insert([
            [
                'product_id'   => 1,
                'size_id' => 1,
            ],
            [
                'product_id'   => 1,
                'size_id' => 2,
            ],
            [
                'product_id'   => 1,
                'size_id' => 3,
            ],
            [
                'product_id'   => 2,
                'size_id' => 1,
            ],
            [
                'product_id'   => 2,
                'size_id' => 2,
            ],
            [
                'product_id'   => 3,
                'size_id' => 3,
            ],
            [
                'product_id'   => 3,
                'size_id' => 4,
            ],[
                'product_id'   => 5,
                'size_id' => 1,
            ],
            [
                'product_id'   => 6,
                'size_id' => 2,
            ],
            [
                'product_id'   => 7,
                'size_id' => 3,
            ],[
                'product_id'   => 8,
                'size_id' => 1,
            ],
            [
                'product_id'   => 8,
                'size_id' => 2,
            ],[
                'product_id'   => 8,
                'size_id' => 3,
            ],
            [
                'product_id'   => 9,
                'size_id' => 1,
            ],[
                'product_id'   => 9,
                'size_id' => 2,
            ],
            [
                'product_id'   => 10,
                'size_id' => 1,
            ],
            [
                'product_id'   => 11,
                'size_id' => 1,
            ],[
                'product_id'   => 12,
                'size_id' => 2,
            ],
            [
                'product_id'   => 12,
                'size_id' => 3,
            ],
        ]);
    }
}
