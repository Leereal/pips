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
					<div class="mb-5 row p-md-3">
						<div class="shadow col-12 p-md-2">
							<div class="col-12 text-center bg-{{$bg}} p-3">
								<h1 class="title1 text-{{$text}}">{{$settings->site_name}} Support</h1>
								<div class="sign-up-row widget-shadow text-{{$text}}">
									<h4 class="text-{{$text}}">For inquiries, suggestions or complains. Mail us</h4>
									<h1 class="mt-3 text-primary"> <a href="mailto:{{$settings->contact_email}}">{{$settings->contact_email}}</a> </h1>
								</div>
							</div>
							<div class="pb-5 col-md-8 offset-md-2">
								<form method="post" action="{{route('enquiry')}}">
									<input type="hidden" name="name" value="{{Auth::user()->name}}" />
									<div class="form-group">
										<input type="hidden" name="email" value="{{Auth::user()->email}}">
									</div>
									{{-- <div class="form-group">
										<h5 for="" class="text-{{$text}}">Subject <span class=" text-danger">*</span></h5>
										<input type="text" name="subject" class="form-control text-{{$text}} bg-{{$bg}}" required>
									</div> --}}
									<div class="form-group">
										<h5 for="" class="text-{{$text}}">Message<span class=" text-danger">*</span></h5>
										<textarea name="message" class="form-control text-{{$text}} bg-{{$bg}}" rows="5"></textarea>
									</div>
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="">
										<input type="submit" class="py-2 btn btn-primary btn-block" value="Send">
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
    @endsection