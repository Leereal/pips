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
					<h1 class="title1 text-{{$text}}">Agents</h1>
					</div>
					<x-danger-alert/>
                    <x-success-alert/>
					<div class="mb-5 row">
						<div class="col-12 card p-3 shadow bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}">
							<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
							<a href="#" data-toggle="modal" data-target="#addagentModal" class="btn btn-{{$text}} btn-lg" style="margin:10px;"> <i class="fa fa-plus"></i> Add agent</a>
								<table id="ShipTable" class="table table-hover text-{{$text}}"> 
									<thead> 
										<tr> 
											<th>Agent name</th>
											<th>Clients referred</th>
											<th>Option(s)</th>
										</tr> 
									</thead> 
									<tbody> 
										@foreach($agents as $agent)
										<tr> 
											<td>{{$agent->duser->name}}</td> 
											<td>{{$agent->total_refered}}</td> 
											<!--<td>{{$agent->total_activated}}</td> 
											<td>{{$agent->earnings}}</td>-->
											<td>
											{{-- <a class="btn btn-{{$text}}" href="{{url('admin/dashboard/viewagent')}}/{{$agent->agent}}" title="View agent clients">
												<i class="fa fa-eye"></i>
												</a>  --}}
												
												<a class="btn btn-{{$text}}" href="{{url('admin/dashboard/delagent')}}/{{$agent->id}}" style="color:red;" title="Remove agent clients">
												<i class="fa fa-times"></i>
												</a>
											</td> 
										</tr> 
										@endforeach
									</tbody> 
									<!-- Add agent Modal -->
											<div id="addagentModal" class="modal fade" role="dialog">
										<div class="modal-dialog">
		
											<!-- Modal content-->
											<div class="modal-content">
											<div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}} ">
												
												<h4 class="modal-title text-{{$text}}"><strong>Add agent.</strong></h4>
												<button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
													<form style="padding:3px;" role="form" method="post" action="{{action('App\Http\Controllers\Admin\LogicController@addagent')}}">
														<select class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="user">
															@foreach($users as $user)
														<option value="{{$user->id}}">{{$user->name}}</option>
															@endforeach
													</select><br>	    
														<input class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" placeholder="Increment referred users" type="number" min="0" name="referred_users" value="0"><br/>
														<input type="hidden" name="_token" value="{{ csrf_token() }}">
														<input type="submit" class="btn btn-{{$text}}" value="Submit">
												</form>
											</div>
											</div>
										</div>
									</div>
										<!-- /Add agent Modal -->
								</table>
							</div>
						</div>
					</div>
			</div>
	@endsection