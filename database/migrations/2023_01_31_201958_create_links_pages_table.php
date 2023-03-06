<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //id,page_id, title,logo,url
        schema::create('page_detail', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->text('banner');
            $table->text('name');
            $table->text('title');
            $table->text('description');
            $table->text('country');
            $table->text('city');
            $table->text('user_name');
            $table->timestamp('date')->useCurrent();
        });

        Schema::create('page_contacts', function (Blueprint $table) {
            $table->id();
            $table->text('page_id');
            $table->text('title');
            $table->text('phone');
            $table->text('email');
        });

        Schema::create('page_social', function (Blueprint $table) {
            $table->id();
            $table->text('page_id');
            $table->text('title');
            $table->text('logo');
            $table->text('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_detail');
        Schema::dropIfExists('page_contacts');
        Schema::dropIfExists('page_social');
    }
}
