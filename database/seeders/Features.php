<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Features extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> show_feature_product
        \DB::table('feature')->insert([
            'feature_name' => 'New Arrivals'
        ]);
        \DB::table('feature')->insert([
            'feature_name' => 'Best Sellers'
        ]);
        \DB::table('feature')->insert([
<<<<<<< HEAD
=======
        \DB::table('features')->insert([
            'feature_name' => 'New Arrivals'
        ]);
        \DB::table('features')->insert([
            'feature_name' => 'Best Sellers'
        ]);
        \DB::table('features')->insert([
>>>>>>> layout_login_and_register
=======
>>>>>>> show_feature_product
            'feature_name' => 'Hot Sales'
        ]);
    }
}
