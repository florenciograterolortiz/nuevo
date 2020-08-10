<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('name',128);
            $table->string('slug', 128)->unique();
            $table->mediumText('excerpt')->nullable();
            $table->Text('body');
            $table->enum('status', ['PUBLISHET', 'DRAFT']);
            $table->string('file', 128)->unique();
            $table->timestamps();

            //Relacion de Tablas post con usuario y post con categorias

              $table->foreign('user_id')->references('id')->on('users')
              ->onDelete('cascade')
              ->onUpdate('cascade');
              $table->foreign('category_id')->references('id')->on('categories')
              ->onDelete('cascade')
              ->onUpdate('cascade');
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
