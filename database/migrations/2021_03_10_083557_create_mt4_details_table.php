<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMt4DetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt4_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client_id')->nullable();
            $table->string('mt4_id')->nullable();
            $table->string('mt4_password')->nullable();
            $table->string('type')->nullable();
            $table->string('account_type')->nullable();
            $table->string('currency')->nullable();
            $table->string('leverage')->nullable();
            $table->string('server')->nullable();
            $table->string('options')->nullable();
            $table->string('duration')->nullable();
            $table->string('status')->nullable();
            $table->datetime('start_date')->nullable();
            $table->datetime('end_date')->nullable();
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
        Schema::dropIfExists('mt4_details');
    }
}
