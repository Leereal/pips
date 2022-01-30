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
                    <div class="mt-2 mb-5">
                        <h1 class="title1 text-{{$text}}">Change Your password</h1> <br> <br>
                    </div>
                    <x-danger-alert/>
                    <x-success-alert/>
                    <div class="mb-5 row">
                        <div class="col-lg-8 offset-lg-2 card p-4 bg-{{Auth('admin')->User()->dashboard_style}} shadow">
                            <form method="post" action="{{route('adminupdatepass')}}">
                                <div class="bg-{{Auth('admin')->User()->dashboard_style}}">
                                    <h5 class=" text-{{$text}}">Old Password</h5>
                                    <input type="password" name="old_password" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" required>
                                </div>
                                <div class="bg-{{Auth('admin')->User()->dashboard_style}}">
                                    <h5 class=" text-{{$text}}">New Password* </h5>
                                    <input type="password" name="password" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" required>
                                </div>
                                <div class="bg-{{Auth('admin')->User()->dashboard_style}}">
                                    <h5 class=" text-{{$text}}">Confirm Password</h5>
                                    <input type="password" name="password_confirmation" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" required>
                                </div> <br>
                                <input type="submit" class="btn btn-primary" value="Submit">
                                    
                                <input type="hidden" name="id" value="{{Auth('admin')->User()->id}}">
                                <input type="hidden" name="current_password" value="{{Auth('admin')->User()->password}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    @endsection