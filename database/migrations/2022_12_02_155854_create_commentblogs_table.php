<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentblogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentblogs', function (Blueprint $table) {
            $table->id('comment_id_blog');
            $table->double('blog_id',11);
            $table->string('name_comment_blog',50);
            $table->string('email_comment_blog',50);
            $table->string('comment_content_blog',150);
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
        Schema::dropIfExists('commentblogs');
    }
}
