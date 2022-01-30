<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('plan')->nullable();
            $table->integer('user')->nullable();
            $table->string('amount')->nullable();
            $table->string('activate')->nullable();
            $table->string('inv_duration')->nullable();
            $table->datetime('expire_date')->nullable();
            $table->datetime('activated_at')->nullable();
            $table->datetime('last_growth')->nullable();
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
        Schema::dropIfExists('user_plans');
    }
}
