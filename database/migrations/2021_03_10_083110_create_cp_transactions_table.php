<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cp_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('txn_id')->nullable();
            $table->string('item_name')->nullable();
            $table->string('Item_number')->nullable();
            $table->string('amount_paid')->nullable();
            $table->string('user_plan')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('user_tele_id')->nullable();
            $table->string('amount1')->nullable();
            $table->string('amount2')->nullable();
            $table->string('currency1')->nullable();
            $table->string('currency2')->nullable();
            $table->string('status')->nullable();
            $table->string('status_text')->nullable();
            $table->string('type')->nullable();
            $table->string('cp_p_key')->nullable();
            $table->string('cp_pv_key')->nullable();
            $table->string('cp_m_id')->nullable();
            $table->string('cp_ipn_secret')->nullable();
            $table->string('cp_debug_email')->nullable();

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
        Schema::dropIfExists('cp_transactions');
    }
}
