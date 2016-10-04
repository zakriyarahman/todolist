<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileLoginStandardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_login_standards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id')->unsigned()->index();
            $table->string('username');
            $table->string('password');
            $table->string('password_token')->nullable();

            $table->integer('creator');
            $table->integer('created_at');
            $table->integer('updated_at');
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
        Schema::dropIfExists('profile_login_standards');
    }
}
