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
					<x-danger-alert/>
                    <x-success-alert/>
					<x-error-alert/>
					<div class="row profile">
                        <div class="p-2 col-md-12">
                            <div class="card p-md-5 p-1 shadow-lg bg-{{$bg}}">
								<ul class="nav nav-pills">
									<li class="nav-item">
										<a href="#per" class="nav-link active" data-toggle="tab">Personal Settings</a>
									</li>
									<li class="nav-item">
										<a href="#set" class="nav-link" data-toggle="tab">Withdrawal Settings</a>
									</li>
									<li class="nav-item">
										<a href="#pas" class="nav-link" data-toggle="tab">Password/Security</a>
									</li>
									<li class="nav-item">
										<a href="#sec" class="nav-link" data-toggle="tab">Other Settings</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="per">
										@include('profile.update-profile-information-form')
									</div>
									<div class="tab-pane fade" id="set">
										@include('profile.update-withdrawal-method')
									</div>
									<div class="tab-pane fade" id="pas">
										@include('profile.update-password-form')
									</div>
									<div class="tab-pane fade" id="sec">
										@include('profile.update-security-form')
									</div>
								</div>
                            </div>
                        </div>
					</div>
				</div>	
			</div>
	@endsection