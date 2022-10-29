<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->double('customer_id',11);
            $table->double('shipping_id',11);
            $table->string('order_code',20);
            $table->string('order_status',50);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $table->double('product_price',11);
=======
                        $table->double('product_price',11);
>>>>>>> detail_and_related_product
=======
            $table->double('product_price',11);
>>>>>>> function_login_and_logout
=======
                        $table->double('product_price',11);
>>>>>>> layout_login_and_register
=======
                        $table->double('product_price',11);
>>>>>>> show_feature_product
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
