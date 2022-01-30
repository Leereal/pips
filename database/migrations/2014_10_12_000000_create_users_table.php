<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('dashboard_style')->default('dark');
            $table->string('bank_name')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('acnt_type_active')->nullable();
            $table->string('btc_address')->nullable();
            $table->string('eth_address')->nullable();
            $table->string('ltc_address')->nullable();
            $table->string('plan')->nullable();
            $table->string('confirmed_plan')->nullable();
            $table->string('user_plan')->nullable();
            $table->integer('account_bal')->default('0');
            $table->integer ('roi')->default('0');
            $table->integer ('bonus')->default('0');
            $table->integer('ref_bonus')->default('0');
            $table->integer('signup_bonus')->nullable();
            $table->string('auto_trade')->nullable();
            $table->integer('bonus_released')->default('0');
            $table->string('ref_by')->nullable();
            $table->string('ref_link')->nullable();
            $table->string('id_card')->nullable();
            $table->string('passport')->nullable();
            $table->string('account_verify')->nullable();

            $table->datetime('entered_at')->nullable();
            $table->datetime('activated_at')->nullable();
            $table->datetime('last_growth')->nullable();
            $table->string('status')->default('blocked');
            $table->string('trade_mode')->nullable();
            $table->string('act_session')->nullable();

            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
