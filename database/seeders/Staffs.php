<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Staffs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('staffs')->insert([
            'staff_name' => 'tatloi',
            'staff_email' => 'tatloi@gmail.com',
            'staff_password' => md5('123123'),
            'status' => 0
        ]);
    }
}
