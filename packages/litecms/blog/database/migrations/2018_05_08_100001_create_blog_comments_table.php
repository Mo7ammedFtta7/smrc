<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogCommentsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: comments
         */
        Schema::create(config('litecms.blog.comment.model.table'), function ($table) {
            $table->increments('id');
            $table->longText('comment')->nullable();
            $table->string('author', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->integer('mobile')->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('published', ['yes','no'])->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_type', 255)->nullable();
            $table->integer('blog_id')->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop(config('litecms.blog.comment.model.table'));
    }
}
