<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Categorys extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categorys')->insert([
            'category_name' => 'Giảm Giá',
            'category_qty' => '2'
        ]);
        \DB::table('categorys')->insert([
            'category_name' => 'Giải Trí',
            'category_qty' => '3'
        ]);
    }
}
