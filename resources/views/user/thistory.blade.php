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
						<h1 class="title1 text-{{$text}}">Your ROI history</h1>
					</div>
					<x-danger-alert/>
                    <x-success-alert/>
					<div class="mb-5 row">
						<div class="col text-center card shadow-lg bg-{{$bg}} p-3">
							<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
								<table id="UserTable" class="UserTable table table-hover text-{{$text}}"> 
									<thead> 
										<tr> 
											<th>Plan</th>
											<th>Amount</th>
											<th>Type</th>
											<th>Date created</th>
										</tr> 
									</thead> 
									<tbody> 
									@foreach($t_history as $history)
										<tr> 
											<td>{{$history->plan}}</td> 
											<td>{{$settings->currency}}{{$history->amount}}</td> 
											<td>{{$history->type}}</td> 
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
		@include('user.modals')
	@endsection