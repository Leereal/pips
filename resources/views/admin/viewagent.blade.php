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
        <div class="main-panel bg-{{Auth('admin')->User()->dashboard_style}}">
			<div class="content bg-{{Auth('admin')->User()->dashboard_style}}">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					<h1 class="title1 text-{{$text}}">View agent ({{$agent->name}}) clients</h1>
					</div>
					@if(Session::has('message'))
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-info alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<i class="fa fa-info-circle"></i> {{Session::get('message')}}
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
					<div class="mb-5 row">
						<div class="col card p-4 bg-{{Auth('admin')->User()->dashboard_style}} shadow">
							<div class="table-responsive" data-example-id="hoverable-table"> 
							<table class="table table-hover text-{{$text}}"> 
									<thead> 
										<tr> 
											<th>Client name</th>
											<th>Client Inv. plan</th>
											<th>Client status</th>
											<th>Earnings</th>
										</tr> 
									</thead> 
									<tbody> 
										@foreach($ag_r as $client)
										<tr> 
											 <td>{{$client->name}}</td> 
											 @if(isset($client->dplan->name)) 
											 <td>{{$client->dplan->name}}</td>
		 									 @else
											 <td>NULL</td>
											 @endif 
											 <td>{{$client->status}}</td> 
											 <td>{{$client->account_bal}}</td>
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