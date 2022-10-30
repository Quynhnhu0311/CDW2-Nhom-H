<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Protypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('protypes')->insert([
            'type_name'=>'Quần',
            'type_qty'=>300
        ]);
        \DB::table('protypes')->insert([
            'type_name'=>'Áo',
            'type_qty'=>300
        ]);
        \DB::table('protypes')->insert([
            'type_name'=>'Balo - Túi xách',
            'type_qty'=>300
        ]);
        \DB::table('protypes')->insert([
            'type_name'=>'Giày - Dép',
            'type_qty'=>300
        ]);
        \DB::table('protypes')->insert([
            'type_name'=>'Phụ kiện',
            'type_qty'=>300
        ]);
    }
}
