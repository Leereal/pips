<?php
	if (Auth('admin')->User()->dashboard_style == "light") {
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
    @include('admin.topmenu')
    @include('admin.sidebar')
        <div class="main-panel bg-{{$bg}}">
			<div class="content bg-{{$bg}}">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-{{$text}}">Account Profile Information</h1>
					</div>
					<x-danger-alert/>
                    <x-success-alert/>
					<div class="row profile">
						
                        <div class="p-2 col-md-8 offset-md-2">
                            <div class="card p-5 shadow-lg bg-{{$bg}}">

                                <form role="form" method="post"action="{{route('upadprofile')}}">
                                    <h5 class="text-{{$text}}">First name</h5>
                                    <input type="text" name="name" value="{{Auth('admin')->User()->firstName }}" class="form-control bg-{{$bg}} text-{{$text}}"> <br>
                                   
                                    <h5 class="text-{{$text}}">Last name</h5>
                                    <input type="text" name="lname" value="{{Auth('admin')->User()->lastName }}" class="form-control bg-{{$bg}} text-{{$text}}"> <br>

                                    <h5 class="text-{{$text}}">Phone Number</h5>
                                    <input type="text" name="phone"  class="form-control bg-{{$bg}} text-{{$text}}" value="{{Auth('admin')->User()->phone }}"> <br>

                                    <h5 class="text-{{$text}}">Two Factor Authentication</h5> 
                                    <select class="form-control text-{{$text}} bg-{{Auth('admin')->User()->dashboard_style}}" name="token">
                                        <option>{{Auth('admin')->User()->enable_2fa}}</option>
                                        <option value="enabled">Enable</option>
                                        <option value="disabled">Disable</option>
                                    </select><br>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-primary" value="Update">
                                </form>
                                
                            </div>
                        </div>
					</div>
				</div>	
			</div>
	@endsection