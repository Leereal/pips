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
			<div class="content bg-{{Auth('admin')->User()->dashboard_style}} ">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					    <h1 class="title1 text-{{$text}} d-inline">{{$user->name}} login activities</h1>
                        <div class="d-inline">
							<div class="float-right btn-group">
								<a class="btn btn-primary btn-sm" href="{{route('viewuser', $user->id)}}"> <i class="fa fa-arrow-left"></i> back</a>
							</div>
						</div>
					</div>
					<x-danger-alert/>
                    <x-success-alert/>
					<div class="mb-5 row">
                        @if (count($activities)>0)
                            <div class="mb-4 col-md-12">
                                <a class="btn btn-danger btn-sm" href="{{route('clearactivity', $user->id)}}"> <i class="fa fa-trash"></i> Clear Data</a>
                            </div>  
                        @endif
						<div class="col-md-12 card shadow p-4 bg-{{Auth('admin')->User()->dashboard_style}}">
							<div class="table-responsive" data-example-id="hoverable-table"> 
								<table id="ShipTable" class="table table-hover text-{{$text}}"> 
									<thead> 
										<tr>  
											{{-- <th>Client name</th> --}}
											<th>IP Address</th>
											<th>Device/OS/Browser</th>
                                            <th>Date/Time logged in</th>
										</tr> 
									</thead> 
									<tbody> 
										@foreach($activities as $activity)
										<tr> 
											{{-- <th>{{$deposit->id}}</th> --}}
											<td>{{$activity->ip_address}}</td>
											<td>{{$activity->device}}/{{$activity->os}}/{{$activity->browser}}</td> 
											<td>{{\Carbon\Carbon::parse($activity->created_at)->toDayDateTimeString()}}</td> 
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