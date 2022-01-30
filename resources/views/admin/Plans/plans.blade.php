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
		<div class="main-panel">
			<div class="content bg-{{Auth('admin')->User()->dashboard_style}}">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-{{$text}}">System Plans</h1>
					</div>
					<x-danger-alert/>
					<x-success-alert/>
					<div class="mb-5 row">
						<div class="mt-2 mb-3 col-lg-12">
							<a class="btn btn-primary" href="{{route('newplan')}}"><i class="fa fa-plus"></i> New plan</a>
						</div>
						@forelse ($plans as $plan)
						<div class="col-lg-4">
							<div class="pricing-table purple border p-4 card bg-{{$bg}} shadow">
								
								<h2 class="text-{{$text}}">{{$plan->name}}</h2>
								<!-- Price -->
								<div class="price-tag">
									<span class="symbol text-{{$text}}">{{$settings->currency}}</span>
									<span class="amount text-{{$text}}">{{$plan->price}}</span>
								</div>
								<!-- Features -->
								<div class="pricing-features">
									<div class="feature text-{{$text}}">Minimum Possible Deposit:<span class="text-{{$text}}">{{$settings->currency}}{{$plan->min_price}}</span></div>
									<div class="feature text-{{$text}}">Maximum Possible Deposit:<span  class="text-{{$text}}">{{$settings->currency}}{{$plan->max_price}}</span></div>
									<div class="feature text-{{$text}}">Minimum Return:<span class="text-{{$text}}">{{$settings->currency}}{{$plan->minr}}</span></div>
									<div class="feature text-{{$text}}">Maximum Return:<span class="text-{{$text}}">{{$settings->currency}}{{$plan->maxr}}</span></div>
									<div class="feature text-{{$text}}">Gift Bonus:<span class="text-{{$text}}">{{$settings->currency}}{{$plan->gift}}</span></div>
									<div class="feature text-{{$text}}">Duration:<span class="text-{{$text}}">{{$plan->expiration}}</span></div>
								</div> <br>
								
								<!-- Button -->
								<div class="text-center">
									<a href="{{route('editplan', $plan->id)}}" class="btn btn-primary"><i class="text-white flaticon-pencil"></i>
									</a> &nbsp; 
									<a href="{{ url('admin/dashboard/trashplan') }}/{{$plan->id}}" class="btn btn-danger"><i class="text-white fa fa-times"></i>
									</a>
								</div>
							</div>
						</div>	
						@empty
						<div class="col-lg-8">
							<div class="pricing-table card purple border bg-{{$bg}} shadow p-4">
								<h4 class="text-{{$text}}">No Investment Plan at the moment, click the button above to add a plan.</h4>
							</div>
						</div>
						@endforelse
						
					</div>
				</div>
			</div>
	@endsection