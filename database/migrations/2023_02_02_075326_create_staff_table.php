<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_tb', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->text('description');
            $table->string('pic');
            $table->string('photo');
            $table->string('email');
            $table->string('instagram');
            $table->string('whatsapp');
            $table->string('linkdin');
            $table->string('telegram');
            $table->string('phone');
        });
        Schema::create('programs_tb', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
        });
        Schema::create('prices_tb', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->string('kind');
            $table->string('pic');
        });
        Schema::create('works_tb', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->string('pic');
            $table->string('kind');
        });
        Schema::create('faq_tb', function (Blueprint $table) {
            $table->id();
            $table->string('quastion');
            $table->string('answear');
            $table->string('kind');
        });
        Schema::create('advertisement_tb', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('link');
            $table->string('pic');
            $table->string('pic_m');
        });
        Schema::create('login_admins', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('password');
            $table->string('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_tb');
        Schema::dropIfExists('programs_tb');
        Schema::dropIfExists('prices_tb');
        Schema::dropIfExists('works_tb');
        Schema::dropIfExists('faq_tb');
        Schema::dropIfExists('advertisement_tb');
        Schema::dropIfExists('login_admins');
    }
}
