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
                <h1 class="title1 text-{{$text}}">Fund Your Account</h1>
            </div>
            <x-danger-alert />
            <x-success-alert />
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-{{$bg}}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">

                                    <form action="javascript:;" method="post" id="submitpaymentform">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-4 col-md-12">
                                                <h5 class="card-title text-{{$text}}">Enter Amount</h5>
                                                <input class="form-control text-{{$text}} bg-{{$bg}}"
                                                    placeholder="Enter Amount" type="number" name="amount" required>
                                            </div>
                                            <div class="mb-4 col-md-12">
                                                <input type="hidden" name="payment_method" id="paymethod">
                                            </div>
                                            <div class="mt-2 mb-1 col-md-12">
                                                <h5 class="card-title text-{{$text}}">Choose Payment Method from the
                                                    list below</h5>
                                            </div>
                                            @forelse ($dmethods as $method)
                                            @if($method->name != " Bank Transfer " || $method->name != "Skrill")
                                            <div class="mb-2 col-md-6">
                                                <a style="cursor: pointer;" data-method="{{$method->name}}"
                                                    id="{{$method->id}}" class="text-decoration-none"
                                                    onclick="checkpamethd(this.id)">
                                                    <div class="rounded shadow bg-{{$bg}}">
                                                        <div class="card-body">
                                                            <span class="text-{{$text}}">
                                                                @if (!empty($method->img_url))
                                                                <img src="{{$method->img_url}}" alt="" class=""
                                                                    style="width: 25px;">
                                                                @endif
                                                                {{$method->name}}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endif
                                            @empty
                                            <div class="mb-1 col-md-12">
                                                <p class="text-{{$text}}">No Payment Method enabled at the moment,
                                                    please check back later.</p>
                                            </div>
                                            @endforelse
                                            @if (count($dmethods)>0)
                                            <div class="mt-2 mb-1 col-md-12">
                                                <input type="submit" class="px-5 btn btn-primary btn-lg"
                                                    value="Proceed to Payment">
                                            </div>
                                            @endif

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        let paymethod = document.querySelector('#paymethod');

				function checkpamethd(id){
					let url = "{{url('/dashboard/get-method/')}}" + '/' + id;
					fetch(url)
					.then(function(res){
						return res.json();
					})
					.then(function (response){
						paymethod.value = response;
						$.notify({
							// options
							icon: 'flaticon-alarm-1',
							title: 'Payment Method',
							message: 'you have chosen to pay with ' + ' ' + response,
						},{
							// settings
							type: 'success',
							allow_dismiss: true,
							newest_on_top: false,
							placement: {
								from: "top",
								align: "right"
							},
							offset: 20,
							spacing: 10,
							z_index: 1031,
							delay: 5000,
							timer: 1000,
							animate: {
								enter: 'animated fadeInDown',
								exit: 'animated fadeOutUp'
							},

						});
					})
					.catch(function(err){
						console.log(err);
					});
				}
				$('#submitpaymentform').on('submit', function() {
					//alert('love');
					if (paymethod.value == "") {
						$.notify({
							// options
							icon: 'flaticon-alarm-1',
							title: 'Select Payment Method',
							message: 'Please choose a payment method by clicking on it',
						},{
							// settings
							type: 'danger',
							allow_dismiss: true,
							newest_on_top: false,
							placement: {
								from: "top",
								align: "right"
							},
							offset: 20,
							spacing: 10,
							z_index: 1031,
							delay: 5000,
							timer: 1000,
							animate: {
								enter: 'animated fadeInDown',
								exit: 'animated fadeOutUp'
							},

						});
					}else {
						let makepayurl = "{{url('/dashboard/newdeposit')}}"
						//console.log(makepayurl);
						document.getElementById("submitpaymentform").action = makepayurl;

					}

				});
    </script>
    @endsection
