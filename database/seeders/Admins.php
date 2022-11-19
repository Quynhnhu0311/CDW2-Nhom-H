<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Admins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
            'admin_name' => 'Quỳnh Như',
            'admin_email' => 'quynhnhu@gmail.com',
            'admin_password' => md5('12345'),
            'permission' => 1
        ]);
        \DB::table('admins')->insert([
            'admin_name' => 'Văn Truyền',
            'admin_email' => 'vantruyen@gmail.com',
            'admin_password' => md5('12345'),
            'permission' => 2
        ]);
    }
}
