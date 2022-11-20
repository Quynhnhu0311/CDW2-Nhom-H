<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'quynhnhu',
            'email' => 'quynhnhu@gmail.com',
            'password' => md5('123123'),
            'status' => 'true'
        ]);
    }
}
