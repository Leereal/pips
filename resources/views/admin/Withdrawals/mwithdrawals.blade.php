<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
} else {
    $text = "light";
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
					<h1 class="title1 text-{{$text}}">Manage clients withdrawals</h1>
					</div>
					<x-danger-alert/>
                    <x-success-alert/>
				
					<div class="mb-5 row">
						<div class="col card p-3 shadow bg-{{Auth('admin')->User()->dashboard_style}}">
							<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
								<span style="margin:3px;">
								<table id="ShipTable" class="table table-hover text-{{$text}}"> 
									<thead> 
										<tr> 
											<th>ID</th> 
											<th>Client name</th>
											<th>Amount requested</th>
											<th>Amount + charges</th>
											<th>Payment Method</th>
											<th>Receiver's email</th>
											<th>Status</th> 
											<th>Date created</th>
											<th>Option</th>
										</tr> 
									</thead> 
									<tbody> 
										@foreach($withdrawals as $deposit)
										<tr> 
											<th scope="row">{{$deposit->id}}</th>
											<td>{{$deposit->duser->name}}</td>
											<td>{{$settings->currency}}{{number_format($deposit->amount)}}</td> 
											<td>{{$settings->currency}}{{number_format($deposit->to_deduct)}}</td> 
											<td>{{$deposit->payment_mode}}</td> 
											<td>{{$deposit->duser->email}}</td> 
											<td>@if ($deposit->status == "Processed")
												<span class="badge badge-success">{{$deposit->status}}</span>
											@else
												<span class="badge badge-danger">{{$deposit->status}}</span>
											@endif</td> 
											<td>{{\Carbon\Carbon::parse($deposit->created_at)->toDayDateTimeString()}}</td> 
											<td>
											<a href="{{route('processwithdraw',$deposit->id )}}" class="m-1 btn btn-info btn-sm"><i class="fa fa-eye"></i> View</a>
										 	</td> 
										</tr> 
										@endforeach
									</tbody> 
								</table>
							</div>
						</div>
					</div>
				</div>	
			</div>
	@endsection