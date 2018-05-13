<?php

use Illuminate\Database\Seeder;


class SizesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('sizes')->insert([
            [
                'size' => 'XS',
            ],
            [
                'size' => 'S',
            ],
            [
                'size' => 'M',
            ],
            [
                'size' => 'L',
            ],
            [
                'size' => 'XL',
            ],
            [
                'size' => 'XXL',
            ],

        ]);
    }
}
