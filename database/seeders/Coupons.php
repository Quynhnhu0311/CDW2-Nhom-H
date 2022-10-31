<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Coupons extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('Coupons')->insert([
            'coupon_code' => 'sansalethang10',
            'coupon_name' => 'Săn Sale Tháng 10',
            'coupon_qty' => 2,
            'coupon_condition' => 1,
            'coupon_number' => 10000
        ]);
        \DB::table('Coupons')->insert([
            'coupon_code' => 'CNVV',
            'coupon_name' => 'Chủ Nhật Vui Vẻ',
            'coupon_qty' => 3,
            'coupon_condition' => 2,
            'coupon_number' => 10
        ]);
        \DB::table('Coupons')->insert([
            'coupon_code' => 'halloween',
            'coupon_name' => 'Ngày Lễ Halloween',
            'coupon_qty' => 1,
            'coupon_condition' => 1,
            'coupon_number' => 100000
        ]);
    }
}
