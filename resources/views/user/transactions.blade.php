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
					<h1 class="title1 text-{{$text}}">Transactions on your account</h1>
					</div>
					<x-danger-alert/>
					<x-success-alert/>
					<div class="mb-5 row">
					<div class="col text-center card p-4 bg-{{$bg}}">
					    
					        <nav>
								<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
		
								  <h4 class="pt-3 nav-item nav-link active " id="nav-home-tab" data-toggle="tab" href="#1" role="tab" aria-controls="nav-home" aria-selected="true"> Deposits</h4>
		
								  <h4 class="pt-3 nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#2" role="tab" aria-controls="nav-profile" aria-selected="false">Withdrawals</h4>
		
								  <h4 class="pt-3 nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#3" role="tab" aria-controls="nav-contact" aria-selected="false">Others</h4>
							    </div>
							</nav>
							
							<div class="px-3 py-3 tab-content px-sm-0" id="nav-tabContent">
		
								{{-- This is the first Tab content --}}
								<div class="tab-pane fade show active bg-{{$bg}} card p-3" id="1" role="tabpanel" aria-labelledby="nav-home-tab">
									<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
        							<table id="UserTable" class="UserTable table table-hover text-{{$text}}"> 
        									<thead> 
        										<tr> 
        											<th>Amount</th>
        											<th>Payment mode</th>
        											<th>Status</th> 
        											<th>Date created</th>
        										</tr> 
        									</thead> 
        									<tbody> 
        										@foreach($deposits as $deposit)
        										<tr> 
        											<td>{{$settings->currency}}{{$deposit->amount}}</td> 
        											<td>{{$deposit->payment_mode}}</td> 
        											<td>
													@if ($deposit->status == "Processed")
													<span class="badge badge-success">{{$deposit->status}}</span>
													@else
														<span class="badge badge-danger">{{$deposit->status}}</span>
													@endif
													</td> 
        											<td>{{\Carbon\Carbon::parse($deposit->created_at)->toDayDateTimeString()}}</td> 
        										</tr> 
        										@endforeach
        									</tbody> 
        								</table>
        							</div>
								</div>
		
								{{-- This is the second Tab Content --}}
								<div class="tab-pane fade p-3 bg-{{$bg}}" id="2" role="tabpanel" aria-labelledby="nav-profile-tab">
									<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
        							<table id="UserTable" class="UserTable table table-hover text-{{$text}}"> 
        									<thead> 
        										<tr> 
        											<th>Amount requested</th>
        											<th>Amount + charges</th>
        											<th>Recieving mode</th>
        											<th>Status</th> 
        											<th>Date created</th>
        										</tr> 
        									</thead> 
        									<tbody> 
        										@foreach($withdrawals as $withdrawal)
        										<tr> 
        											<td>{{$settings->currency}}{{$withdrawal->amount}}</td>
        											<td>{{$settings->currency}}{{$withdrawal->to_deduct}}</td> 
        											<td>{{$withdrawal->payment_mode}}</td> 
        											<td>
														@if ($withdrawal->status == "Processed")
													<span class="badge badge-success">{{$withdrawal->status}}</span>
													@else
														<span class="badge badge-danger">{{$withdrawal->status}}</span>
													@endif
													</td> 
        											<td>{{\Carbon\Carbon::parse($withdrawal->created_at)->toDayDateTimeString()}}</td> 
        										</tr> 
        										@endforeach
        									</tbody> 
        								</table>
        							</div>
								</div>
		
								{{-- This is the Third Tab Content --}}
								<div class="tab-pane fade p-3 bg-{{$bg}}" id="3" role="tabpanel" aria-labelledby="nav-contact-tab">
									<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
        								<table id="UserTable" class="UserTable table table-hover text-{{$text}}"> 
        									<thead> 
        										<tr> 
        											<th>Amount</th>
        											<th>Type</th>
        											<th>Plan/Narration</th>
        											<th>Date created</th>
        										</tr> 
        									</thead> 
        									<tbody> 
        									@foreach($t_history as $history)
        										<tr> 
        											<td>{{$settings->currency}}{{$history->amount}}</td> 
        											<td>{{$history->type}}</td> 
        											<td>{{$history->plan}}</td> 
        											<td>{{\Carbon\Carbon::parse($history->created_at)->toDayDateTimeString()}}</td> 
        										</tr> 
        									@endforeach
        									</tbody> 
        								</table>
        								
        							</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
			@include('user.modals')	
	@endsection
	