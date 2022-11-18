<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id('shipping_id');
            $table->string('customer_fistname',50);
            $table->string('customer_lastname',50);
            $table->string('customer_province',200);
            $table->string('customer_district',200);
            $table->string('customer_town',200);
            $table->string('customer_address',200);
            $table->string('customer_email',100);
            $table->string('customer_phone',11);
            $table->string('customer_note',100)->nullable();
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
        Schema::dropIfExists('shippings');
    }
}
