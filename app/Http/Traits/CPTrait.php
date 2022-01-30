<?php
/*
	CoinPayments.net API Class - v1.0
	Copyright 2014-2016 CoinPayments.net. All rights reserved.	
	License: GPLv2 - http://www.gnu.org/licenses/gpl-2.0.txt
*/
namespace App\Http\Controllers;
namespace App\Http\Traits;

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
use App\Models\Tp_Transaction;
use App\Models\Cp_transaction;
use Illuminate\Support\Facades\DB;

//use Illuminate\Foundation\Bus\DispatchesJobs;
//use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

trait CPTrait{
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
	
	
	function getAncestors($array, $deposit_amount, $parent = 0, $level = 0) {
  $referedMembers = '';
  $parent=User::where('id',$parent)->first();
  foreach ($array as $entry) {
    
      if ($entry->id == $parent->ref_by) {
          //get settings 
          $settings=Settings::where('id', '=', '1')->first();
                    
           if($level == 1){
          $earnings=$settings->referral_commission1*$deposit_amount/100;
          //add earnings to ancestor balance
            User::where('id',$entry->id)
            ->update([
            'account_bal' => $entry->account_bal + $earnings,
            'ref_bonus' => $entry->ref_bonus + $earnings,
            ]);
            
            //create history
             Tp_Transaction::create([
            'user' => $entry->id,
            'plan' => "Credit",
             'amount'=>$earnings,
             'type'=>"Ref_bonus",
            ]);
            
          }elseif($level == 2){
          $earnings=$settings->referral_commission2*$deposit_amount/100;
          //add earnings to ancestor balance
            User::where('id',$entry->id)
            ->update([
            'account_bal' => $entry->account_bal + $earnings,
            'ref_bonus' => $entry->ref_bonus + $earnings,
            ]);
            
            //create history
             Tp_Transaction::create([
            'user' => $entry->id,
            'plan' => "Credit",
             'amount'=>$earnings,
             'type'=>"Ref_bonus",
            ]);
            
          }elseif($level == 3){
          $earnings=$settings->referral_commission3*$deposit_amount/100;
          //add earnings to ancestor balance
            User::where('id',$entry->id)
            ->update([
            'account_bal' => $entry->account_bal + $earnings,
            'ref_bonus' => $entry->ref_bonus + $earnings,
            ]);
            
            //create history
             Tp_Transaction::create([
            'user' => $entry->id,
            'plan' => "Credit",
             'amount'=>$earnings,
             'type'=>"Ref_bonus",
            ]);
            
          }elseif($level == 4){
          $earnings=$settings->referral_commission4*$deposit_amount/100;
          //add earnings to ancestor balance
            User::where('id',$entry->id)
            ->update([
            'account_bal' => $entry->account_bal + $earnings,
            'ref_bonus' => $entry->ref_bonus + $earnings,
            ]);
            
            //create history
             Tp_Transaction::create([
            'user' => $entry->id,
            'plan' => "Credit",
             'amount'=>$earnings,
             'type'=>"Ref_bonus",
            ]);
            
          }elseif($level == 5){
          $earnings=$settings->referral_commission5*$deposit_amount/100;
          //add earnings to ancestor balance
            User::where('id',$entry->id)
            ->update([
            'account_bal' => $entry->account_bal + $earnings,
            'ref_bonus' => $entry->ref_bonus + $earnings,
            ]);
            
            //create history
             Tp_Transaction::create([
            'user' => $entry->id,
            'plan' => "Credit",
             'amount'=>$earnings,
             'type'=>"Ref_bonus",
            ]);
         
          }

          if($level == 6){
          break;
          }
          
          //$referedMembers .= '- ' . $entry->name . '- Level: '. $level. '- Commission: '.$earnings.'<br/>';
          $referedMembers .= $this->getAncestors($array, $deposit_amount, $entry->id, $level+1);
      
       }
  }
  return $referedMembers;
}

	
	
	
	
	//COINPAYMENT TRANSACTIONS
	
	// pay with coinpayment option
    // pay with coinpayment option
    public function paywithcp($amount, $coin, $ui, $msg){
    
    //fetch settings
    $settings=Settings::where('id','1')->first();
    
    $user=User::where('id',$ui)->first();
    
    //create transaction
    if($msg=='new')
    {
       
      //fetch Coinpayment merchant credentials
        $cpd=Cp_transaction::where('id','1')->first();
        
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
        'ipn_url' => $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'_p',
      );
    	// See https://www.coinpayments.net/apidoc-create-transaction for all of the available fields
			
      $result = $this->CreateTransaction($req);
      if ($result['error'] == 'ok') {
          
          //if transacton created successful
      
      $txn_id = $result['result']['txn_id'];
	
      //store transacton details in DB
      $txn=new Cp_transaction();
    
      $txn->txn_id= $txn_id;
      $txn->item_name= 'Account deposit';
      $txn->type= 'Deposit';
      $txn->amount_paid= $amount;
      $txn->user_id= $ui;
      $txn->currency1= 'USD';
      $txn->currency2= $coin;
      $txn->save();
      
      $res = $this->GetTransactionInformation($txn_id);
      //get the array info of transaction
      if ($res['error'] == 'ok') {
          //$msg = $res['result']['payment_address']." \n\n Amount: ".$res['result']['amountf']."\n Coin: ".$res['result']['coin'] ;
      } else {
        return "Transaction error!";
      }
    
   //if transacton created successful
   
   //return $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'_p';
   
   return view('user.payment')->with(array(

          'title'=>'Complete Payment',
          'amount'=> $result['result']['amount'],
          'coin'=> $coin,
          'p_address'=> $result['result']['address'],
          'p_qrcode'=> $result['result']['qrcode_url'],
          'settings' => Settings::where('id','1')->first(),
        ));

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
	
    }elseif($msg=='new_p')
    {
        //credit fund to user account
        User::where('id',$ui)->update([
            'account_bal' => $user->account_bal + $amount,
            ]);
        return redirect()->route('dashboard')->with('message','Payment successful!');
    }
  
    }
    
public function cpaywithcp(){
       
     //fetch settings
    $settings=Settings::where('id','1')->first();
        
   //fetch Coinpayment merchant credentials
    $cpd=Cp_transaction::where('id','1')->first();
    
    $this->Setup($cpd->cp_pv_key, $cpd->cp_p_key);
    
    //fetch Coinpayment unconfirmed txns
    $cp_txns=Cp_transaction::where('status',NULL)->get();
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
       Cp_transaction::where('id',$txn->id)
       ->update([
       'status' => $result['result']['status'],
       'status_text' => $result['result']['status_text'],
       ]);
      
        //get user
         $user=User::where('tele_id',$txn->user_tele_id)->first();
                
                  
      //save withdrawal info
      $dp=new Withdrawal();
                
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
       Cp_transaction::where('id',$txn->id)
       ->update([
       'status' => $result['result']['status'],
       'status_text' => $result['result']['status_text'],
       ]);
      
        //get user
         $user=User::where('id',$txn->user_id)->first();
      
       //add funds to user's account
        User::where('id',$user->id)
        ->update([
        'account_bal' => $user->account_bal + $txn->amount_paid,
        ]);
                  
      //save deposit info
      $dp=new Deposit();
      $dp->txn_id= $txn_id;            
      $dp->amount= $txn->amount_paid;
      $dp->payment_mode= 'CoinPayments';
      $dp->status= 'processed';
      $dp->proof= 'CoinPayments';
      $dp->plan= "0";
      $dp->user= $user->id;
      $dp->save();
                    
      //give % to referral
      if(!empty($user->ref_by) || $user->ref_by !="0"){
      //start to Process referral
      
      //get the referral
      $duser=User::where('id',$user->ref_by)->first();
      //fetch site settings
      $settings=Settings::where('id','1')->first();
      //increment the user's earnings
      $earnings=$settings->referral_commission*$txn->amount_paid/100;
      Agent::where('agent',$duser->id)->increment('earnings', $earnings);
                  
                  
      //Add ref earning to the users account balance
      User::where('id', $duser->id)
      ->update([
      'account_bal'=>$duser->account_bal+$earnings,
      ]);
      
      //create history
     Tp_Transaction::create([
      'user' => $duser->id,
      'plan' => "Credit",
      'amount'=>$earnings,
      'type'=>"Ref_bonus",
    ]);
      
      //credit commission to ancestors
      $deposit_amount = $txn->amount_paid;
      $array=User::all();
      $parent=$user->id;
      $this->getAncestors($array, $deposit_amount, $parent);
                    
    }
        
        
        
    } else if ($status < 0) {
        //payment error, this is usually final but payments will sometimes be reopened if there was no exchange rate conversion or with seller consent
        //Update txn info on cp_txns
       Cp_transaction::where('id',$txn->id)
       ->update([
       'status' => $result['result']['status'],
       'status_text' => $result['result']['status_text'],
       ]);
    } else {
        //payment is pending, you can optionally add a note to the order page
        //Update txn info on cp_txns
       Cp_transaction::where('id',$txn->id)
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
    $cpd=Cp_transaction::where('id','1')->first();
    //get settings
    $settings=Settings::where('id','1')->first();
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
    		$user=User::where('id',$ui)->first();
    		 //save withdrawal info
          $dp=new Withdrawal();
          $dp->txn_id= $txn_id;         
          $dp->amount= $amount;
          $dp->to_deduct= $to_withdraw;
          $dp->payment_mode= "$coin CoinPayments";
          $dp->status= 'Processed';
          $dp->user= $user->id;
          $dp->save();

        	//store transacton details in DB
        	$txn=new Cp_transaction();
            
          $txn->txn_id= $txn_id;
          $txn->item_name= 'Funds withdrawal';
          $txn->type= 'Withdrawal';
          $txn->amount_paid= $amount;
          $txn->user_id= $ui;
          $txn->status= $stts;
          $txn->currency1= 'USD';
          $txn->currency2= $coin;
          $txn->save();
              
    		return redirect()->route('withdrawalsdeposits')
          ->with('message', 'Withrawal created successful! You will recieve your funds soon.');
    	} else {
    		  //print 'Error: '.$result['error']."\n";
          return redirect()->back()->with('status', $result['error']);
    		 // return($result['error']);
    	}
    }
    
    
    //check for matching bonus
    public function getMatchingBonus($sponsor,$amount){
        //get sponsor's downlines that are not matched yet
        $dwlns = User::where('ref_by',$sponsor)->where('bonus_matched','<>','matched')->get();
        
        //get sponsor
        $spnsr=User::where('id',$sponsor)->first();
        
        foreach($dwlns as $dwln){
            //get downline plans
            if($this->getDownlinePlans($dwln->id,$amount)==true){
                //calculate commission and credit sponsor with matching bonus
                $matching_bonus = (5 * $amount)/100;
                //get sponsor user plans
                $upln=User_plans::where('id',$spnsr->user_plan)->first();
                
                //check if plan amount is at least 50% of the commision
                //calculate 50% of the commission
                $cm_pc= ($matching_bonus *50)/100; 
                if($upln->amount >= $cm_pc){
                    //add earnings to sponsor balance
                    User::where('id',$sponsor)
                    ->update([
                    'account_bal' => $spnsr->account_bal + $matching_bonus,
                    'ref_bonus' => $spnsr->ref_bonus + $matching_bonus,
                    ]);
                    
                    //create history
                     Tp_Transaction::create([
                    'user' => $spnsr->id,
                    'plan' => "Credit",
                     'amount'=>$matching_bonus,
                     'type'=>"Matching bonus",
                    ]);
                    
                    //mark the downline bonus_matched field = matched
                    User::where('id',$dwln->id)
                    ->update([
                    'bonus_matched' => 'matched',
                    ]);
                    
                    //leadership bonus
                    //credit 7% of the commission to the next 10 downlines of the sponsor
                    $booster_bonus= ($matching_bonus *7)/100;
                    $this->creditLeadershipBonus($sponsor,$booster_bonus);
                }
            }
        }
    }
    
    //get downline plans
    public function getDownlinePlans($dwln,$amount){
        //get downline plans
        $plns = User_plans::where('user',$dwln)->where('amount',$amount)->first();
        
        if($plns->count()){
            return true;
        }else{
            return false;
        }
    }
    
    //credit booster commission
    public function creditLeadershipBonus($sponsor,$amnt){
        $array = User::orderby('id','asc')->where('ref_by',$sponsor)->take(10);
        
        $level = 0;
        
        foreach ($array as $entry) {
                    
           if($level == 1){
          $earnings=2*$amount/100;
          }elseif($level == 2){
          $earnings=1.5*$amount/100;
          }elseif($level == 3){
          $earnings=1*$amount/100;
          }elseif($level == 4){
          $earnings=0.75*$amount/100;
          }elseif($level == 5){
          $earnings=0.5*$amount/100;
          }elseif($level == 6){
          $earnings=0.4*$amount/100;
          }elseif($level == 7){
          $earnings=0.3*$amount/100;
          }elseif($level == 8){
          $earnings=0.25*$amount/100;
          }elseif($level == 9){
          $earnings=0.20*$amount/100;
          }elseif($level == 10){
          $earnings=0.10*$amount/100;
          }
          
          //add earnings to downline balance
            User::where('id',$entry->id)
            ->update([
            'account_bal' => $entry->account_bal + $earnings,
            'ref_bonus' => $entry->ref_bonus + $earnings,
            ]);
            
            //create history
             Tp_Transaction::create([
            'user' => $entry->id,
            'plan' => "Credit",
             'amount'=>$earnings,
             'type'=>"Leadership bonus",
            ]);
    
            $level .=  $level+1;
    
          if($level == 11){
          break;
          }
      }
        
    }
    
         //Get downlines level
    // public function getSponsorDownlines($array, $amount, $parent = 0, $level = 0) {
    //   $referedMembers = '';
    //   foreach ($array as $entry) {
    //       if ($entry->ref_by == $parent) {
                    
    //       if($level == 1){
    //       $earnings=2*$amount/100;
    //       }elseif($level == 2){
    //       $earnings=1.5*$amount/100;
    //       }elseif($level == 3){
    //       $earnings=1*$amount/100;
    //       }elseif($level == 4){
    //       $earnings=0.75*$amount/100;
    //       }elseif($level == 5){
    //       $earnings=0.5*$amount/100;
    //       }elseif($level == 6){
    //       $earnings=0.4*$amount/100;
    //       }elseif($level == 7){
    //       $earnings=0.3*$amount/100;
    //       }elseif($level == 8){
    //       $earnings=0.25*$amount/100;
    //       }elseif($level == 9){
    //       $earnings=0.20*$amount/100;
    //       }elseif($level == 10){
    //       $earnings=0.10*$amount/100;
    //       }
          
    //       //add earnings to downline balance
    //         User::where('id',$entry->id)
    //         ->update([
    //         'account_bal' => $entry->account_bal + $earnings,
    //         'ref_bonus' => $entry->ref_bonus + $earnings,
    //         ]);
            
    //         //create history
    //          Tp_Transaction::create([
    //         'user' => $entry->id,
    //         'plan' => "Credit",
    //          'amount'=>$earnings,
    //          'type'=>"Leadership bonus",
    //         ]);
    
    //           $referedMembers .= $this->getdownlines($array, $amount, $entry->id, $level+1);
    //       }
    
    //       if($level == 11){
    //       break;
    //       }
    //   }
    //   return $referedMembers;
    // }
    
	
};