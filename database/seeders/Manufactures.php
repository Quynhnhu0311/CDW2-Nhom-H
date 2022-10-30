<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Manufactures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('manufactures')->insert([
            'manu_name'=>'LV',
            'manu_qty'=>300
        ]);

        \DB::table('manufactures')->insert([
                'manu_name'=>'Gucci',
                'manu_qty'=>300
        ]);

        \DB::table('manufactures')->insert([
            'manu_name'=>'Prada',
            'manu_qty'=>300
        ]);

        \DB::table('manufactures')->insert([
            'manu_name'=>'Chanel',
            'manu_qty'=>300
        ]);

        \DB::table('manufactures')->insert([
            'manu_name'=>'Hermes',
            'manu_qty'=>300
        ]);
    }
}
