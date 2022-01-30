<?php
/*
	CoinPayments.net API Class - v1.0
	Copyright 2014-2016 CoinPayments.net. All rights reserved.	
	License: GPLv2 - http://www.gnu.org/licenses/gpl-2.0.txt
*/
namespace App\Http\Controllers;
namespace App\Http\Traits;

use App\agents;
use App\users;
use App\settings;
use App\confirmations;
use App\gh;
use App\ph;
use App\plans;
use App\account;
use App\cp_transactions;
use App\tp_transactions;
use App\user_plans;
use App\deposits;
use App\withdrawals;
use DB;
//use Illuminate\Foundation\Bus\DispatchesJobs;
//use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

trait BCPTrait{
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
	
		public function GetWithdrawalInfo($txId) {      
        $req = array(
            'txid' => $txId,
        );
        return $this->api_call('get_withdrawal_info', $req);
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
	
	
	public function GetTransactionInformation($txId) {      
    $req = array(
        'txid' => $txId,
    );
    return $this->api_call('get_tx_info', $req);
   }

	

	/**
	 * Creates a withdrawal from your account to a specified address.<br />
	 * @param amount The amount of the transaction (floating point to 8 decimals).
	 * @param currency The cryptocurrency to withdraw.
	 * @param address The address to send the coins to.
	 * @param auto_confirm If auto_confirm is TRUE, then the withdrawal will be performed without an email confirmation.
	 * @param ipn_url Optionally set an IPN handler to receive notices about this transaction. If ipn_url is empty then it will use the default IPN URL in your account.
	 */
	public function CreateWithdrawal($amount, $add_tx_fee, $currency, $currency2, $address, $auto_confirm = FALSE, $ipn_url = '') {		
		$req = array(
			'amount' => $amount,
			'add_tx_fee' => $add_tx_fee,
			'currency' => $currency,
			'currency2' => $currency2,
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
    // pay with coinpayment option
    public function paywithcp($amount, $coin, $up, $ui, $msg){
        
    //create transaction
    if($msg=='new')
    {
       
    //fetch settings
    $settings=settings::where('id','1')->first();
    
    $user=users::where('tele_id',$ui)->first();
        
	//fetch Coinpayment merchant credentials
    $cpd=cp_transactions::where('id','1')->first();
    
    	$this->Setup($cpd->cp_pv_key, $cpd->cp_p_key);
	
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
		'buyer_email' => $user->email,
		'buyer_name' => $user->name,
		'address' => $address, // leave blank send to follow your settings on the Coin Settings page
		'item_name' => 'Account deposit',
		'ipn_url' => "",
	);
	// See https://www.coinpayments.net/apidoc-create-transaction for all of the available fields
			
	$result = $this->CreateTransaction($req);
	if ($result['error'] == 'ok') {
	    
	    //if transacton created successful
	
	$txn_id = $result['result']['txn_id'];
	
	//store transacton details in DB
	$txn=new cp_transactions();
    
      $txn->txn_id= $txn_id;
      $txn->item_name= 'Account deposit';
      $txn->type= 'Deposit';
      $txn->amount_paid= $amount;
      $txn->user_plan= $up;
      $txn->user_tele_id= $ui;
      $txn->currency1= 'USD';
      $txn->currency2= $coin;
      
      $txn->save();
      
      $res = $this->GetTransactionInformation($txn_id);
    //get the array info of transaction
    if ($res['error'] == 'ok') {
        $msg = $res['result']['payment_address']." \n\n Amount: ".$res['result']['amountf']."\n Coin: ".$res['result']['coin'] ;
   	return($msg);
     } else {
	return "Transaction error!";
     }
    
    //return($result['result']['status_url']);
	    
		//$le = php_sapi_name() == 'cli' ? "\n" : '<br />';
		//print 'Transaction created with ID: '.$result['result']['txn_id'].$le;
		//print 'Buyer should send '.sprintf('%.08f', $result['result']['amount']).$coin.$le;
		//print 'Status URL: '.$result['result']['status_url'].$le;
	} else {
		print 'Error: '.$result['error']."\n";
	}
	
    }
  
    }
    
    public function cpaywithcp(){
       
     //fetch settings
    $settings=settings::where('id','1')->first();
        
   //fetch Coinpayment merchant credentials
    $cpd=cp_transactions::where('id','1')->first();
    
    $this->Setup($cpd->cp_pv_key, $cpd->cp_p_key);
    
    //fetch Coinpayment unconfirmed txns
    $cp_txns=cp_transactions::where('status',NULL)->get();
    if(count($cp_txns) > 0){
    
    foreach($cp_txns as $txn){
        
    //check if it is withdrawal transaction
    /*if($txn->type=="Withdrawal"){
    $txId=$txn->txn_id;
    $result = $this->GetWithdrawalInfo($txId);
    
    //get the array info of transaction
    if ($result['error'] == 'ok') {
    
    $status = $result['result']['status'];
    
    if ($status == 2) {
        // payment is complete
        
        //Update txn info on cp_txns
       cp_transactions::where('id',$txn->id)
       ->update([
       'status' => $result['result']['status'],
       'status_text' => $result['result']['status_text'],
       ]);
      
        //get user
         $user=users::where('tele_id',$txn->user_tele_id)->first();
                
                  
      //save withdrawal info
      $dp=new withdrawals();
                
      $dp->amount= $txn->amount_paid;
      $dp->payment_mode= 'CoinPayments';
      $dp->status= 'processed';
      $dp->user= $user->id;
      $dp->save();
        
    }
    }else {
	print 'Error: '.$result['error']."\n";
     }
    }*/
        
    //else{
    $txn_id=$txn->txn_id;
    $result = $this->GetTransactionInformation($txn_id);
    
    //get the array info of transaction
    if ($result['error'] == 'ok') {
    
    $status = $result['result']['status'];
    
    if ($status >= 100 || $status == 2) {
        // payment is complete or queued for nightly payout, success
        
        //Update txn info on cp_txns
       cp_transactions::where('id',$txn->id)
       ->update([
       'status' => $result['result']['status'],
       'status_text' => $result['result']['status_text'],
       ]);
      
        //get user
         $user=users::where('tele_id',$txn->user_tele_id)->first();
         //get plan
       $dps=user_plans::where('id',$txn->user_plan)->first();
       $dp=plans::where('id',$dps->plan)->first();
                    
       //confirm user plan
       user_plans::where('id',$txn->user_plan)
       //->where('plan',$user->plan)
       ->update([
       'amount' => $txn->amount_paid,
       'active' => "yes",
       'activated_at' => \Carbon\Carbon::now(),
      'last_growth' => \Carbon\Carbon::now(),
       ]);
                  
      //save deposit info
      $dp=new deposits();
        
      $dp->txn_id= $txn_id;            
      $dp->amount= $txn->amount_paid;
      $dp->payment_mode= 'CoinPayments';
      $dp->status= 'processed';
      $dp->proof= 'CoinPayments';
      $dp->plan= $user->plan;
      $dp->user= $user->id;
      $dp->save();
                    
      //give % to referral
      if(!empty($user->ref_by) || $user->ref_by !="0"){
         //fetch site settings
      $settings=settings::where('id','1')->first();
      //start to Process referral
      $ref_by_link=$settings->bot_link."?start=$user->ref_by";
      //get the referral
      $duser=users::where('ref_link',$ref_by_link)->first();
      
      //increment the user's earnings
      $earnings=$settings->referral_commission*$txn->amount_paid/100;
      agents::where('agent',$duser->id)->increment('earnings', $earnings);
                  
                  
      //Add ref earning to the users account balance
      users::where('id', $duser->id)
      ->update([
      'account_bal'=>$duser->account_bal+$earnings,
      ]);
                    
    }
        
        
        
    } else if ($status < 0) {
        //payment error, this is usually final but payments will sometimes be reopened if there was no exchange rate conversion or with seller consent
        //Update txn info on cp_txns
       cp_transactions::where('id',$txn->id)
       ->update([
       'status' => $result['result']['status'],
       'status_text' => $result['result']['status_text'],
       ]);
    } else {
        //payment is pending, you can optionally add a note to the order page
        //Update txn info on cp_txns
       cp_transactions::where('id',$txn->id)
       ->update([
       //'status' => $result['result']['status'],
       'status_text' => $result['result']['status_text'],
       ]);
    }
    print_r ($result);
    
    
        
     }
     else {
	print 'Error: '.$result['error']."\n";
     }
    //}
    }//end foreach
     
     }else{
     echo "No new transactions!";
     }
     
    }
    
    
    
    
    
    public function cpwithdraw($amount, $coin, $wallet, $ui, $to_withdraw){
    //fetch Coinpayment merchant credentials
    $cpd=cp_transactions::where('id','1')->first();
    //get settings
    $settings=settings::where('id','1')->first();
    	$this->Setup($cpd->cp_pv_key, $cpd->cp_p_key);
    	
    	$amount=$amount;
    	$add_tx_fee=1;
    	$currency=$coin;
    	$currency2=$settings->s_currency;
    	$address=$wallet;
    
    	$result = $this->CreateWithdrawal($amount, $add_tx_fee, $currency, $currency2, $address);
    	if ($result['error'] == 'ok') {
    		//print 'Withdrawal created with ID: '.$result['result']['id'];
    		$txn_id = $result['result']['id'];
    		//if transacton created successful
    		$stts=$result['result']['status'];
    		
    		//fetch user
    		$user=users::where('tele_id',$ui)->first();
    		 //save withdrawal info
                      $dp=new withdrawals();
                      
                      $dp->txn_id= $txn_id;         
                      $dp->amount= $amount;
                      $dp->to_deduct= $to_withdraw;
                      $dp->payment_mode= 'CoinPayments';
                      $dp->status= 'processed';
                      $dp->user= $user->id;
                      $dp->save();

        	//store transacton details in DB
        	$txn=new cp_transactions();
            
              $txn->txn_id= $txn_id;
              $txn->item_name= 'Funds withdrawal';
              $txn->type= 'Withdrawal';
              $txn->amount_paid= $amount;
              $txn->user_tele_id= $ui;
              $txn->status= $stts;
              $txn->currency1= 'USD';
              $txn->currency2= $coin;
              
              $txn->save();
              
    		return('Withrawal created successful! You will recieve your funds soon.');
    	} else {
    		  //print 'Error: '.$result['error']."\n";
    		  return($result['error']);
    	}
    }
    
    
    
	
};