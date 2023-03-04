<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChosenItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chosen_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_model');
            $table->bigInteger('customer_id');
            $table->string('items_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chosen_items');
    }
}
