<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('customers')->insert([
            'customer_name' => 'quynhnhu',
            'customer_email' => 'quynhnhu@gmail.com',
            'customer_password' => md5('123123'),
            'status' => 0
        ]);
    }
}
