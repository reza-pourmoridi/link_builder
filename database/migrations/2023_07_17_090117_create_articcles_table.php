<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_tb', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('cat_id');
            $table->string('description');
            $table->string('pic');
        });
        Schema::create('article_cats_tb', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_tb');
        Schema::dropIfExists('article_cats_tb');
    }
}
