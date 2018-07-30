<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('post_id');
            $table->integer('author_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->text('post_title')->nullable();
            $table->text('post_image')->nullable();
            $table->longText('post_content')->nullable();
            $table->string('post_status', 20)->nullable()->default('draft');
            $table->string('post_type', 11)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('author_id')
                  ->references('author_id')->on('authors')
                  ->onDelete('cascade');
            $table->foreign('category_id')
                  ->references('category_id')->on('categories')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
