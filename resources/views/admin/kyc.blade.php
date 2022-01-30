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
						<h1 class="title1 text-{{$text}}">{{$settings->site_name}} account verification list</h1>
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
						<div class="col-12">
							<small class="text-{{$text}}">if you can't see the image, try switching your uploaded location to another option from your admin settings page.</small>
						</div>
						<div class="col-12 card p-4 bg-{{Auth('admin')->User()->dashboard_style}} shadow">
							<div class="bs-example widget-shadow table-responsive" data-example-id="hoverable-table"> 
								<table id="ShipTable" class="table table-hover  text-{{$text}}"> 
									<thead> 
										<tr> 
											<th>ID</th> 
											<th>Full name</th> 
											<th>Email</th> 
											<th>KYC Status</th>
											<th>Action</th> 
										</tr> 
									</thead> 
									<tbody> 
										@foreach($users as $list)
										<tr> 
											<th scope="row">{{$list->id}}</th>
											 <td>{{$list->name}} {{$list->l_name}} </td> 
											 <td>{{$list->email}}</td> 
											 
											 <td>{{$list->account_verify}}</td> 
											 <td>
											<a href="#"  data-toggle="modal" data-target="#viewkycIModal{{$list->id}}" class="btn btn-{{$text}} btn-sm"><i class="fa fa-eye"></i> ID</a>
											<a href="#" data-toggle="modal" data-target="#viewkycPModal{{$list->id}}" class="btn btn-{{$text}} btn-sm"><i class="fa fa-eye"></i> Passport</a>
											
											<a href="{{ url('admin/dashboard/acceptkyc') }}/{{$list->id}}" class="btn btn-primary btn-sm">Accept</a>
											 <a href="{{ url('admin/dashboard/rejectkyc') }}/{{$list->id}}" class="btn btn-danger btn-sm">Reject</a>
											 </td> 
										</tr> 
			
										<!-- View KYC ID Modal -->
									<div id="viewkycIModal{{$list->id}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
										
										<!-- Modal content-->
										<div class="modal-content">
										  <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}}">
											<h4 class="modal-title text-{{$text}}">KYC verification - ID card view</h4>
											<button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
										  </div>
										  <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
											@if ($settings->location == "Email")
												<h3 class="text-{{$text}}">Check your email with the KYC upload that has an attachment name of 
												<span class="text-danger">{{$list->id_card}}</span></h3>
											@elseif($settings->location == "Local")
												<img src="{{ asset('storage/app/public/photos/'.$list->id_card)}}" alt="ID Card" title="" class="img-fluid" />
											@else
												@php
												$path = 'storage/'.$list->id_card;
												if (Storage::disk('s3')->exists($path)) {
													$logourl = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
													$logofile = Storage::disk('s3')->get($path);
													$src = $logourl.$logofile;
												}else {
													$src = "";
												}
												@endphp
												<img src="$src" alt="ID Card" title="" class="img-fluid" />
											@endif
										  </div>
										</div>
									  </div>
									</div>
									<!-- /view KYC ID Modal -->
									
									<!-- View KYC Passport Modal -->
									<div id="viewkycPModal{{$list->id}}" class="modal fade" role="dialog">
									  <div class="modal-dialog">
						
										<!-- Modal content-->
										<div class="modal-content">
										  <div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}} ">
											<h4 class="modal-title text-{{$text}}">KYC verification - Passport view</h4>
											<button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
										  </div>
										  <div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
											
											@if ($settings->location == "Email")
												<h3 class="text-{{$text}}">Check your email with the KYC upload that has an attachment name of 
													<span class="text-danger">{{$list->passport}}</span></h3>
											@elseif($settings->location == "Local")
												<img src="{{ asset('storage/app/public/photos/'.$list->passport)}}" alt="Passport" title="" class="img-fluid" />
											@else
												@php
												$ppath = 'storage/'.$list->passport;
												if (Storage::disk('s3')->exists($ppath)) {
													$passurl = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
													$passfile = Storage::disk('s3')->get($ppath);
													$psrc = $passurl.$passfile;
												}else {
													$psrc = "";
												}
												@endphp
												<img src="$psrc" alt="Passport" title="" class="img-fluid" />
											@endif
										  </div>
										  </div>
										</div>
									  </div>
									</div>
									<!-- /view KYC Passport Modal -->
										@endforeach
										
									</tbody> 
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
	@endsection