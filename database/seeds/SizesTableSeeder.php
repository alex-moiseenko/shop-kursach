<?php

use Illuminate\Database\Seeder;


class SizesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('sizes')->insert([
            [
                'id'   => 1,
                'size' => 'XS',
            ],
            [
                'id'   => 2,
                'size' => 'S',
            ],
            [
                'id'   => 3,
                'size' => 'M',
            ],
            [
                'id'   => 4,
                'size' => 'L',
            ],
            [
                'id'   => 5,
                'size' => 'XL',
            ],
        ]);
    }
}
