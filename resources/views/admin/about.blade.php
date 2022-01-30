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
            <div class="content">
                <div class="page-inner">
                    <div class="mt-2 mb-4">
                    
                    </div>
                    <x-danger-alert/>
                    <x-success-alert/>
        
                    <div class="mb-5 row">
                        <div class="col-12 p-4 card shadow bg-{{Auth('admin')->User()->dashboard_style}}">
                            <h1 class="title1 text-{{$text}}">About Onlintrader Software</h1>
                            <p class="title1 text-{{$text}}">Current Version: 4.0.0</p>
                            <div>
								<button type="button" class="text-white btn btn-primary btn-sm disabled" disabled>
								check for update
                                </button>
                                <small class="text-info">coming soon</small>
							</div>
                            <div class="mt-4">
                                <a href="https://doc.onlinetrade.brynamics.xyz/" target="_blank" class="btn btn-primary"> View Our Documentation</a>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
    @endsection