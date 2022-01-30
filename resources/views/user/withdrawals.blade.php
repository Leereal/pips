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
					<h1 class="title1 text-{{$text}}">Request for Withdrawal</h1>
					</div>
					<x-danger-alert/>
					<x-success-alert/>
					<div class="mb-5 row">
					@foreach($wmethods as $method)
					<div class="col-lg-4">
						<div class="p-3 rounded card bg-{{$bg}}">
							<div class="card-body border-danger">
								<h2 class="card-title mb-3 text-{{$text}}"> {{$method->name}}</h2>
								<h4 class="text-{{$text}}">Minimum amount: <strong style="float:right;"> {{$settings->currency}}{{$method->minimum}}</strong></h4><br>
								
								<h4 class="text-{{$text}}">Maximum amount:<strong style="float:right;"> {{$settings->currency}}{{$method->maximum}}</strong></h4><br>
								
								<h4 class="text-{{$text}}">Charge Type:<strong style="float:right;">{{$method->charges_type}}</strong></h4><br>
								
								<h4 class="text-{{$text}}">Charges Amount: 
									<strong style="float:right;"> 
										@if ($method->charges_type == "percentage")
											{{$method->charges_amount}}%
										@else
											{{$settings->currency}}{{$method->charges_amount}}
										@endif
									</strong>
								</h4><br>
								
								<h4 class="text-{{$text}}">Duration:<strong style="float:right;"> {{$method->duration}}</strong></h4><br>
								<div class="text-center">
									@if ($settings->enable_with == "false")
										<button class="btn btn-primary" data-toggle="modal" data-target="#withdrawdisabled"><i class="fa fa-plus"></i> Request withdrawal</button>
									@else
										<form action='{{route('withdrawamount')}}' method="POST">
											@csrf
											<div class="form-group">
												<input type="hidden" value="{{$method->name}}" name="method">
												<button class="btn btn-primary" type='submit'><i class="fa fa-plus"></i> Request withdrawal</button>
											</div>
											
										</form>
										
									@endif
								</div>
							</div>
						</div>
					</div>
					@endforeach
					</div>
					<!-- Withdrawal Modal -->
					<div id="withdrawdisabled" class="modal fade" role="dialog">
						<div class="modal-dialog">
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header bg-{{$bg}}">
							<h4 class="modal-title text-{{$text}}">Withdrawal Status</h4>
							  <button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body bg-{{$bg}}">
								<h4 class="text-{{$text}}" >Withdrawal is Disabled at the moment, Please check back later</h4>  
							</div>
						  </div>
						</div>
					  </div>
					  <!-- /Withdrawals Modal -->
				</div>
			</div>
	@endsection