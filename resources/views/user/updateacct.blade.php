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
						<h1 class="text-{{$text}}">Add your withdrawal info</h1>
					</div>
					@if(Session::has('message'))
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-info alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<i class="fa fa-info-circle"></i> {{ Session::get('message') }}
							</div>
						</div>
					</div>
					@endif
		
					@if(count($errors) > 0)
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger alert-dismissable" role="alert" >
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								@foreach ($errors->all() as $error)
								<i class="fa fa-warning"></i> {{ $error }}
								@endforeach
							</div>
						</div>
					</div>
					@endif
					<div class="mb-4 row">
						<div class="col card p-3 shadow-lg bg-{{$bg}}">
							<div class="accordion accordion-{{$text}} ">
								<form method="post" action="{{route('updateacount')}}">
								<!--............................... collapse one -->
								<div class="card">
									<div class="card-header bg-{{$bgmenu}}" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<div class="span-icon">
											<div class="fa fa-clone"></div>
										</div>
										<div class="span-title text-{{$text}}">
											Bank transfer
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
										<div class="card-body bg-{{$bg}} shadow">
											<div class="form-group">
												<h5 class="text-{{$text}}">Bank Name</h5>
												<input type="text" name="bank_name" value="{{Auth::user()->bank_name}}"  class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter bank name">
											</div>
											<div class="form-group">
												<h5 class="text-{{$text}}">Account Name</h5>
												<input type="text" name="account_name" value="{{Auth::user()->account_name}}"  class="form-control  text-{{$text}} bg-{{$bg}}" placeholder="Enter Account name">
											</div>
											<div class="form-group">
												<h5 class="text-{{$text}}">Account Number</h5>
												<input type="text" name="account_no" value="{{Auth::user()->account_number}}"  class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter Account Number">
											</div>
										</div>
									</div>
								</div>
									<!--............................... collapse two -->
								<div class="card">
									<div class="card-header bg-{{$bgmenu}}" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
										<div class="span-icon">
											<div class="fa fa-clone"></div>
										</div>
										<div class="span-title text-{{$text}}">
											BItcoin
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
										<div class="card-body bg-{{$bg}} shadow">
											<div class="form-group">
												<h5 class="text-{{$text}}">BTC ADDRESS</h5>
												<input type="text" name="btc_address" value="{{Auth::user()->btc_address}}"  class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter Bitcoin Address">
											</div>
										</div>
									</div>
								</div>
						<!--............................... collapse three -->
								<div class="card">
									<div class="card-header bg-{{$bg}}" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
										<div class="span-icon">
											<div class="fa fa-clone"></div>
										</div>
										<div class="span-title text-{{$text}}">
										Ethereum
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
										<div class="card-body bg-{{$bg}} shadow">
											<div class="form-group">
												<h5 class="text-{{$text}}">ETH ADDRESS</h5>
												<input type="text" name="eth_address" value="{{Auth::user()->eth_address}}"  class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter Etherium Address">
											</div>
										</div>
									</div>
								</div>
								<!--............................... collapse four -->
								<div class="card">
									<div class="card-header bg-{{$bgmenu}}" id="headingFour" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
										<div class="span-icon">
											<div class="fa fa-clone"></div>
										</div>
										<div class="span-title text-{{$text}}">
											Litcoin
										</div>
										<div class="span-mode"></div>
									</div>
									<div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
										<div class="card-body bg-{{$bg}} shadow">
											<div class="form-group">
												<h5 class="text-{{$text}} bg-{{$bg}}">LTC ADDRESS</h5>
												<input type="text" name="ltc_address" value="{{Auth::user()->ltc_address}}"  class="form-control text-{{$text}} bg-{{$bg}}" placeholder="Enter Litcoin Address">
											</div>
										</div>
									</div>
								</div>
								<!--......................... end of collaps four -->
								<input type="submit" class="btn btn-primary" value="Submit">  &nbsp; &nbsp; 
								{{-- <a href="{{ url('dashboard/skip_account') }}" style="color:red;">Skip</a> --}}
								<input type="hidden" name="id" value="{{Auth::user()->id}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
    @endsection