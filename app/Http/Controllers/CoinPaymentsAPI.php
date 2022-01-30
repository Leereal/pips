<?php
/*
	CoinPayments.net API Class - v1.0
	Copyright 2014-2016 CoinPayments.net. All rights reserved.	
	License: GPLv2 - http://www.gnu.org/licenses/gpl-2.0.txt
*/
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Settings;
use App\Models\Plans;
use App\Models\Agent;
use App\Models\User_plans;
use App\Models\Admin;
use App\Models\Faq;
use App\Models\Images;
use App\Models\Testimony;
use App\Models\Content;
use App\Models\Asset;
use App\Models\Mt4dDtails;
use App\Models\Deposit;
use App\Models\Wdmethod;
use App\Models\Withdrawal;
use App\Models\Cp_transaction;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Traits\BCPTrait;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class CoinPaymentsAPI extends Controller{
use AuthorizesRequests, DispatchesJobs, ValidatesRequests, BCPTrait;
	private $private_key = '';
	private $public_key = '';
	private $ch = null;
	
	public function Setup($private_key, $public_key) {
		$this->private_key = $private_key;
		$this->public_key = $public_key;
		$this->ch = null;
	}
	
	/**
	 * Gets the current CoinPayments.net exchange rate. Output includes both crypto and fiat currencies.
	 * @param short If short == TRUE (the default), the output won't include the currency names and confirms needed to save bandwidth.
	 */
	public function GetRates($short = TRUE) {
		$short = $short ? 1:0;
		return $this->api_call('rates', array('short' => $short));
	}

	/**
	 * Gets your current coin balances (only includes coins with a balance unless all = TRUE).<br />
	 * @param all If all = TRUE then it will return all coins, even those with a 0 balance.
	 */
	public function GetBalances($all = FALSE) {		
		return $this->api_call('balances', array('all' => $all ? 1:0));
	}
	
	/**
	 * Creates a basic transaction with minimal parameters.<br />
	 * See CreateTransaction for more advanced features.
	 * @param amount The amount of the transaction (floating point to 8 decimals).
	 * @param currency1 The source currency (ie. USD), this is used to calculate the exchange rate for you.
	 * @param currency2 The cryptocurrency of the transaction. currency1 and currency2 can be the same if you don't want any exchange rate conversion.
	 * @param address Optionally set the payout address of the transaction. If address is empty then it will follow your payout settings for that coin.
	 * @param ipn_url Optionally set an IPN handler to receive notices about this transaction. If ipn_url is empty then it will use the default IPN URL in your account.
	 * @param buyer_email Optionally (recommended) set the buyer's email so they can automatically claim refunds if there is an issue with their payment.
	 */
	public function CreateTransactionSimple($amount, $currency1, $currency2, $address='', $ipn_url='', $buyer_email='') {		
		$req = array(
			'amount' => $amount,
			'currency1' => $currency1,
			'currency2' => $currency2,
			'address' => $address,
			'ipn_url' => $ipn_url,
			'buyer_email' => $buyer_email,
		);
		return $this->api_call('create_transaction', $req);
	}

	public function CreateTransaction($req) {
		// See https://www.coinpayments.net/apidoc-create-transaction for parameters
		return $this->api_call('create_transaction', $req);
	}

	/**
	 * Creates an address for receiving payments into your CoinPayments Wallet.<br />
	 * @param currency The cryptocurrency to create a receiving address for.
	 * @param ipn_url Optionally set an IPN handler to receive notices about this transaction. If ipn_url is empty then it will use the default IPN URL in your account.
	 */
	public function GetCallbackAddress($currency, $ipn_url = '') {		
		$req = array(
			'currency' => $currency,
			'ipn_url' => $ipn_url,
		);
		return $this->api_call('get_callback_address', $req);
	}

	/**
	 * Creates a withdrawal from your account to a specified address.<br />
	 * @param amount The amount of the transaction (floating point to 8 decimals).
	 * @param currency The cryptocurrency to withdraw.
	 * @param address The address to send the coins to.
	 * @param auto_confirm If auto_confirm is TRUE, then the withdrawal will be performed without an email confirmation.
	 * @param ipn_url Optionally set an IPN handler to receive notices about this transaction. If ipn_url is empty then it will use the default IPN URL in your account.
	 */
	public function CreateWithdrawal($amount, $currency, $address, $auto_confirm = FALSE, $ipn_url = '') {		
		$req = array(
			'amount' => $amount,
			'currency' => $currency,
			'address' => $address,
			'auto_confirm' => $auto_confirm ? 1:0,
			'ipn_url' => $ipn_url,
		);
		return $this->api_call('create_withdrawal', $req);
	}

	/**
	 * Creates a transfer from your account to a specified merchant.<br />
	 * @param amount The amount of the transaction (floating point to 8 decimals).
	 * @param currency The cryptocurrency to withdraw.
	 * @param merchant The merchant ID to send the coins to.
	 * @param auto_confirm If auto_confirm is TRUE, then the transfer will be performed without an email confirmation.
	 */
	public function CreateTransfer($amount, $currency, $merchant, $auto_confirm = FALSE) {		
		$req = array(
			'amount' => $amount,
			'currency' => $currency,
			'merchant' => $merchant,
			'auto_confirm' => $auto_confirm ? 1:0,
		);
		return $this->api_call('create_transfer', $req);
	}

	/**
	 * Creates a transfer from your account to a specified $PayByName tag.<br />
	 * @param amount The amount of the transaction (floating point to 8 decimals).
	 * @param currency The cryptocurrency to withdraw.
	 * @param pbntag The $PayByName tag to send funds to.
	 * @param auto_confirm If auto_confirm is TRUE, then the transfer will be performed without an email confirmation.
	 */
	public function SendToPayByName($amount, $currency, $pbntag, $auto_confirm = FALSE) {		
		$req = array(
			'amount' => $amount,
			'currency' => $currency,
			'pbntag' => $pbntag,
			'auto_confirm' => $auto_confirm ? 1:0,
		);
		return $this->api_call('create_transfer', $req);
	}
	
	private function is_setup() {
		return (!empty($this->private_key) && !empty($this->public_key));
	}
	
	private function api_call($cmd, $req = array()) {
		if (!$this->is_setup()) {
			return array('error' => 'You have not called the Setup function with your private and public keys!');
		}
		
		// Set the API command and required fields
    $req['version'] = 1;
		$req['cmd'] = $cmd;
		$req['key'] = $this->public_key;
		$req['format'] = 'json'; //supported values are json and xml
	    
		// Generate the query string
		$post_data = http_build_query($req, '', '&');
	    
		// Calculate the HMAC signature on the POST data
		$hmac = hash_hmac('sha512', $post_data, $this->private_key);
	    
		// Create cURL handle and initialize (if needed)
		if ($this->ch === null) {
			$this->ch = curl_init('https://www.coinpayments.net/api.php');
			curl_setopt($this->ch, CURLOPT_FAILONERROR, TRUE);
			curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, 0);
		}
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, array('HMAC: '.$hmac));
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, $post_data);
	    
		$data = curl_exec($this->ch);                
		if ($data !== FALSE) {
			if (PHP_INT_SIZE < 8 && version_compare(PHP_VERSION, '5.4.0') >= 0) {
				// We are on 32-bit PHP, so use the bigint as string option. If you are using any API calls with Satoshis it is highly NOT recommended to use 32-bit PHP
				$dec = json_decode($data, TRUE, 512, JSON_BIGINT_AS_STRING);
			} else {
				$dec = json_decode($data, TRUE);
			}
			if ($dec !== NULL && count($dec)) {
				return $dec;
			} else {
				// If you are using PHP 5.5.0 or higher you can use json_last_error_msg() for a better error message
				return array('error' => 'Unable to parse JSON result ('.json_last_error().')');
			}
		} else {
			return array('error' => 'cURL error: '.curl_error($this->ch));
		}
	}
	
	
	
	
	
	//COINPAYMENT TRANSACTIONS
	
	// pay with coinpayment option
    public function paywithcp(Request $request, $amount, $coin, $up, $ui, $msg){
    
    //create transaction
    if($msg=='new')
    {
    //fetch settings
    $settings=Settings::where('id','1')->first();
        
	$this->Setup('d57F069303fFDa7a88A6Ba121E7bFd19C4026Fcb789c874D04190773873E80Df', 'aa3f6948307c4fc318be48571d0f33603f9479d9e084ab9eee0601eeb25b09ad');
	
	if($coin=='ETH'){
	    $address=$settings->eth_address;
	}elseif($coin=='BTC'){
	    $address=$settings->btc_address;
	}elseif($coin=='LTC'){
	    $address=$settings->ltc_address;
	}

	$req = array(
		'amount' => $amount,
		'currency1' => 'USD',
		'currency2' => $coin,
		'buyer_email' => Auth::user()->email,
		'buyer_name' => Auth::user()->name,
		'address' => $address, // leave blank send to follow your settings on the Coin Settings page
		'item_name' => 'Account deposit',
		'ipn_url' => "https://telebot.brynamics.xyz/dashboard/paywithcp/$amount/$coin/$up/$ui/done",
	);
	// See https://www.coinpayments.net/apidoc-create-transaction for all of the available fields
			
	$result = $this->CreateTransaction($req);
	if ($result['error'] == 'ok') {
	    
	    //if transacton created successful
	    echo'<link href="'.asset('css/bootstrap.css').'" rel="stylesheet">
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="'.asset('js/bootstrap.min.js').'"></script>';
    return('<div style="border:1px solid #f2f2f2; padding:10px; margin:150px; color:#d0d0d0; text-align:center;"><h1>You will be redirected to your payment page!</h1>
    
    <h4 style="color:#222;">Click on the button below to proceed.</h4>

    <form action="'.$result['result']['status_url'].'" method="post">
    <input type="hidden" name="_token" value="'.csrf_token().'">
    <input type="submit" class="btn btn-default" name="submit" value="Proceed">
    <a href="'.route('deposits').'" class="btn btn-default">Cancel</a>
    </form>
    </div>

    ');
    
	    
		//$le = php_sapi_name() == 'cli' ? "\n" : '<br />';
		//print 'Transaction created with ID: '.$result['result']['txn_id'].$le;
		//print 'Buyer should send '.sprintf('%.08f', $result['result']['amount']).$coin.$le;
		//print 'Status URL: '.$result['result']['status_url'].$le;
	} else {
		print 'Error: '.$result['error']."\n";
	}
	
    }
    
    }
    
    public function autoconfirm(){
       return $this->cpaywithcp();
    }
	
};