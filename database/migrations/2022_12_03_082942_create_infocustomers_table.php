<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfocustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infocustomers', function (Blueprint $table) {
            $table->id('id_info_customer');
            $table->double('id',11);
            $table->date('dateOfBirth');
            $table->double('phone',11);
            $table->string('sex',11);
            // $table->string('avatar', 150);
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
        Schema::dropIfExists('infocustomers');
    }
}
