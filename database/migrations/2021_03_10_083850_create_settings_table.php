<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_name')->nullable();
            $table->text('description')->nullable();
            $table->string('currency')->nullable();
            $table->string('scurrency')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('eth_address')->nullable();
            $table->string('btc_address')->nullable();
            $table->string('ltc_address')->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('location')->nullable();
            $table->string('s_s_k')->nullable();
            $table->string('s_p_k')->nullable();
            $table->string('pp_cs')->nullable();
            $table->string('pp_ci')->nullable();
            $table->string('keywords')->nullable();
            $table->string('site_title')->nullable();
            $table->string('site_address')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('trade_mode')->nullable();
            $table->string('weekend_trade')->nullable();
            $table->string('google_translate')->nullable();
            $table->string('captcha')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('referral_commission')->nullable();
            $table->string('referral_commission1')->nullable();
            $table->string('referral_commission2')->nullable();
            $table->string('referral_commission3')->nullable();
            $table->string('referral_commission4')->nullable();
            $table->string('referral_commission5')->nullable();
            $table->string('signup_bonus')->nullable();
            $table->string('files_key')->nullable();
            $table->text('tawk_to')->nullable();
            $table->string('enable_2fa')->default('no');
            $table->string('enable_kyc')->default('no');
            $table->string('enable_with')->nullable();
            $table->string('enable_verification')->default('true');
            $table->string('withdrawal_option')->default('auto');
            $table->string('dashboard_option')->nullable();
            $table->string('site_preference')->nullable();
            $table->string('enable_annoc')->nullable();
            $table->string('commission_type')->nullable();
            $table->string('commission_fee')->nullable();
            $table->string('monthlyfee')->nullable();
            $table->string('quarterlyfee')->nullable();
            $table->string('yearlyfee')->nullable();
            $table->string('newupdate')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
