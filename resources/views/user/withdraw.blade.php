<?php
	if (Auth::user()->dashboard_style == "light") {
		$bgmenu="blue";
    $bg="light";
    $text = "dark";
} else {
    $bgmenu="dark";
    $bg="dark";
    $text = "light";

}
?>
@extends('layouts.app')
    @section('content')
        @include('user.topmenu')
        @include('user.sidebar')
        <div class="main-panel bg-{{$bg}}">
			<div class="content bg-{{$bg}}">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					    <h1 class="title1 d-inline text-{{$text}}">Request for Withdrawal</h1>
                        <div class="d-inline">
                            <div class="float-right btn-group">
                                @if (Auth::user()->sendotpemail == 'Yes')
                                    <a class="btn btn-primary btn-sm" href="{{route('getotp')}}"> <i class="fa fa-envelope"></i> Request OTP</a>          
                                @endif
                               
                            </div>
                        </div>
                        @if (session('status'))
                        <script type="text/javascript">
                            swal({
                                title: "Error!",
                                text: "{{ session('status') }}",
                                icon: "error",
                                buttons: {
                                    confirm: {
                                        text: "Okay",
                                        value: true,
                                        visible: true,
                                        className: "btn btn-danger",
                                        closeModal: true
                                    }
                                }
                            });
                        </script>
                        {{session()->forget('status')}}
                        @endif
					</div>
					<x-danger-alert/>
					<x-success-alert/>
                    {{-- <div class="row">
                        <div class="col-lg-12">
                            
                        </div>
                    </div> --}}
					<div class="mb-5 row">
                        <div class="col-lg-8 offset-md-2">
                            <div class="p-md-4 p-2 rounded card bg-{{$bg}}">
                                <div class="card-body">
                                <div class="mb-3 alert alert-success">
                                    <h4 class="text-dark">Your Payment Method is <strong>{{$payment_mode}}</strong></h4>
                                </div>
                                    <form action="{{route('completewithdrawal')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <h5 class="text-{{$text}}">Enter Amount to withdraw</h5>
                                            <input class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter Amount" type="number" name="amount" required>
                                        </div>
                                        <input value="{{$payment_mode}}"  type="hidden" name="method">

                                        @if (Auth::user()->sendotpemail == 'Yes')
                                            <div class="form-group">
                                                <h5 class="text-{{$text}}">Enter OTP</h5>
                                                <input class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter Code" type="text" name="otpcode" required>
                                                <small class="text-{{$text}}">OTP will be sent to your email when you request</small>
                                            </div> 
                                        @endif
                                        @if (!$default)
                                            @if ($methodtype == 'crypto')
                                                <div class="form-group">
                                                    <h5 class="text-{{$text}}">Enter {{$payment_mode}} Address </h5>
                                                    <input class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter {{$payment_mode}} Address" type="text" name="details" required>
                                                    <small class="text-{{$text}}">{{$payment_mode}} is not a default withdrawal option in your account, please enter the correct wallet address to recieve your funds.</small>
                                                </div>  
                                            @else
                                               <div class="form-group">
                                                    <h5 class="text-{{$text}}">Enter {{$payment_mode}} Details </h5>
                                                    <textarea class="form-control text-{{$text}} bg-{{$bg}}" row="4" name="details" placeholder="BankName: Name, Account Number: Number, Account name: Name, Swift Code: Code" required>
                                                    
                                                    </textarea>
                                                    <small class="text-{{$text}}">{{$payment_mode}} is not a default withdrawal option in your account, please enter the correct bank details seperated by comma to recieve your funds.</small> <br/>
                                                    <span class="text-danger">BankName: Name, Account Number: Number, Account name: Name, Swift Code: Code</span>
                                                </div>  
                                            @endif
                                            
                                        @endif
                                        <div class="form-group">
                                            <button class="btn btn-primary" type='submit'>Complete Request</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
	@endsection