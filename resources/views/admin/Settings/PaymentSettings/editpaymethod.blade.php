<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
    $bg = 'light';
} else {
    $text = "light";
    $bg = 'dark';
}
?>
@extends('layouts.app')
    @section('content')
        @include('admin.topmenu')
        @include('admin.sidebar')
        <div class="main-panel bg-{{$bg}}">
			<div class="content bg-{{$bg}}">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 d-inline text-{{$text}}">Update Payment method</h1>
                        <div class="d-inline">
                            <div class="float-right btn-group">
                                <a class="btn btn-primary btn-sm" href="{{route('paymentview')}}"> <i class="fa fa-arrow-left"></i> back</a> 
                            </div>
                        </div>
					</div>
					<x-danger-alert/>
                    <x-success-alert/>

					<div class="mb-5 row">
						<div class="col-md-8 offset-md-2">
                            <form method="POST" action="{{route('updatemethod')}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <h6 class="text-{{$text}}">Name</h6>
                                        @if ($method->name == "Bitcoin" or $method->name == "Ethereum" or $method->name == "Litecoin" or $method->name == "Stripe" or $method->name == "Paystack" or $method->name == "Paypal" or $method->name == "Bank Transfer")
                                        <input type="text" class="form-control bg-{{$bg}} text-{{$text}}" name="name" placeholder="Payment method name" value="{{$method->name}}" readonly>
                                        @else
                                        <input type="text" class="form-control bg-{{$bg}} text-{{$text}}" name="name"  placeholder="Payment method name" value="{{$method->name}}" required>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="text-{{$text}}">Minimum Amount</h6>
                                        <input type="number" value="{{$method->minimum}}" class="form-control bg-{{$bg}} text-{{$text}}" name="minimum" id="minamount" required>
                                        <small class="text-{{$text}}">Required but only applies to withdrawal</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="text-{{$text}}">Maximum Amount</h6>
                                        <input type="number" value="{{$method->maximum}}" class="form-control bg-{{$bg}} text-{{$text}}" name="maximum" id="maxamount" required>
                                        <small class="text-{{$text}}">Required but only applies to withdrawal</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="text-{{$text}}">Charges</h6>
                                        <input type="number" value="{{$method->charges_amount}}" class="form-control bg-{{$bg}} text-{{$text}}" name="charges" id="charges" required>
                                        <small class="text-{{$text}}">Required but only applies to withdrawal</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="text-{{$text}}">Charges Type</h6>
                                        <select name="chargetype" class="form-control bg-{{$bg}} text-{{$text}}" required>
                                            <option value="{{$method->charges_type}}">{{$method->charges_type}}</option>
                                            <option value="percentage">Percentage(%)</option>
                                            <option value="fixed">Fixed({{$settings->currency}})</option>
                                        </select>
                                        <small class="text-{{$text}}">Required but only applies to withdrawal</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="text-{{$text}}">Type</h6>
                                        <select name="methodtype" id="methodtype" class="form-control bg-{{$bg}} text-{{$text}}" required>
                                            <option value="{{$method->methodtype}}">{{$method->methodtype}}</option>
                                            <option value="currency">Currency</option>
                                            <option value="crypto">Crypto</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="text-{{$text}}">Image url</h6>
                                        <input type="text" value="{{$method->img_url}}" class="form-control bg-{{$bg}} text-{{$text}}" name="url" id="url">
                                    </div>
                                    {{-- Currency inputs --}}
                                    <div class="form-group col-md-6 currency">
                                        <h6 class="text-{{$text}}">Bank Name</h6>
                                        <input type="text" value="{{$method->bankname}}" class="form-control bg-{{$bg}} text-{{$text}} currinput" name="bank" id="bank">
                                    </div>
                                    <div class="form-group col-md-6 currency">
                                        <h6 class="text-{{$text}}">Account Name</h6>
                                        <input type="text" value="{{$method->account_name}}" class="form-control bg-{{$bg}} text-{{$text}} currinput" name="account_name" id="acnt_name">
                                    </div>
                                    <div class="form-group col-md-6 currency">
                                        <h6 class="text-{{$text}}">Account Number</h6>
                                        <input type="number" value="{{$method->account_number}}" class="form-control bg-{{$bg}} text-{{$text}} currinput" name="account_number" id="acnt_number">
                                    </div>
                                    <div class="form-group col-md-6 currency">
                                        <h6 class="text-{{$text}}">Swift/Other Code</h6>
                                        <input type="number" value="{{$method->swift_code}}" class="form-control bg-{{$bg}} text-{{$text}} currinput" name="swift" id="swift">
                                    </div>

                                    {{-- Cryptocurrency Inputs --}}
                                    <div class="form-group col-md-6 d-none crypto">
                                        <h6 class="text-{{$text}}">Wallet Address</h6>
                                        <input type="text" value="{{$method->wallet_address}}" class="form-control bg-{{$bg}} text-{{$text}} cryptoinput" name="walletaddress" id="walletaddress">
                                    </div>
                                    <div class="form-group col-md-6 d-none crypto">
                                        <h6 class="text-{{$text}}">Barcode</h6>
                                        <input type="file" name="barcode" id=""  class="form-control bg-{{$bg}} text-{{$text}} cryptoinput">
                                        {{-- <input type="text" value="{{$method->barcode}}" class="form-control bg-{{$bg}} text-{{$text}} cryptoinput" name="barcode" id="barcode"> --}}
                                    </div>
                                    <div class="form-group col-md-6 d-none crypto">
                                        <h6 class="text-{{$text}}">Wallet Address Network Type</h6>
                                        <input type="text" value="{{$method->network}}" class="form-control bg-{{$bg}} text-{{$text}} cryptoinput" name="wallettype" id="wallettype">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="text-{{$text}}">Status</h6>
                                        <select name="status" id="status" class="form-control bg-{{$bg}} text-{{$text}}" required>
                                            <option value="{{$method->status}}">{{$method->status}}</option>
                                            <option value="enabled">Enable</option>
                                            <option value="disabled">Disable</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6 class="text-{{$text}}">Type for</h6>
                                        <select name="typefor" id="status" class="form-control bg-{{$bg}} text-{{$text}}" required>
                                            <option value="{{$method->type}}">{{$method->type}}</option>
                                            <option value="withdrawal">Withdrawal</option>
                                            <option value="deposit">Deposit</option>
                                            <option value="both">Both</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h6 class="text-{{$text}}">Optional Note</h6>
                                        <input type="text" value="{{$method->duration}}" class="form-control bg-{{$bg}} text-{{$text}}" name="note" placeholder="Payment may take up to 24 hours">
                                    </div>
                                    <input type="hidden" name="id" value="{{$method->id}}">
                                    <div class="form-group col-md-12">
                                         <button type="submit" class="px-4 btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                               
                            </form> 
                        </div>
					</div>
				</div>
			</div>
			
<script>
    let methodtype = document.getElementById('methodtype');
    let currtype = document.querySelectorAll('.currency');
    let currinput = document.querySelectorAll('.currinput');
    let cryptotype = document.querySelectorAll('.crypto');
    let cryptoinput = document.querySelectorAll('.cryptoinput');
    
    currinput[0].setAttribute('required','');
    currinput[1].setAttribute('required','');
    currinput[2].setAttribute('required','');
    methodtype.addEventListener('change', sortfields);

    if(methodtype.value == 'currency'){
        cryptotype.forEach(element => {
            element.classList.add('d-none');
        });
        currinput[0].setAttribute('required','');
        currinput[1].setAttribute('required','');
        currinput[2].setAttribute('required','');

        cryptoinput[0].removeAttribute('required','');
        cryptoinput[2].removeAttribute('required','');
        
        currtype.forEach(curr => {
            curr.classList.remove('d-none');
        });

    }else{
        cryptoinput[0].setAttribute('required','');
        cryptoinput[2].setAttribute('required','');

        currinput[0].removeAttribute('required','');
        currinput[1].removeAttribute('required','');
        currinput[2].removeAttribute('required','');

        cryptotype.forEach(element => {
            element.classList.remove('d-none');
        });

        currtype.forEach(curr => {
            curr.classList.add('d-none');
        });
    }

    function sortfields() {
        if(methodtype.value == 'currency'){
            cryptotype.forEach(element => {
                element.classList.add('d-none');
            });
            currinput[0].setAttribute('required','');
            currinput[1].setAttribute('required','');
            currinput[2].setAttribute('required','');

            cryptoinput[0].removeAttribute('required','');
            cryptoinput[2].removeAttribute('required','');
            
            currtype.forEach(curr => {
                curr.classList.remove('d-none');
            });

        }else{
            cryptoinput[0].setAttribute('required','');
            cryptoinput[2].setAttribute('required','');

            currinput[0].removeAttribute('required','');
            currinput[1].removeAttribute('required','');
            currinput[2].removeAttribute('required','');

            cryptotype.forEach(element => {
                element.classList.remove('d-none');
            });

            currtype.forEach(curr => {
                curr.classList.add('d-none');
            });
        }
    }
</script>
    @endsection