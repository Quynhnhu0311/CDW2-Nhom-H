<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2022_10_21_112617_create_customer_table.php
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('customer_name', 50);
            $table->string('customer_email', 50);
            $table->string('customer_password', 50);
            $table->string('customer_token', 30);
=======
        Schema::create('admins', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('admin_name',50);
            $table->string('admin_email',50);
            $table->string('admin_password',50);
            $table->integer('permission');
            $table->rememberToken();
>>>>>>> main:database/migrations/2022_11_05_032417_create_admins_table.php
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
        Schema::dropIfExists('customer');
    }
}
