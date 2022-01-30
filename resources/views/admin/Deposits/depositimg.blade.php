<?php
if (Auth('admin')->User()->dashboard_style  == "light") {
    $text = "dark";
    $bg = "light";
} else {
    $text = "light";
    $bg = "dark";
}
?>
@extends('layouts.app')
    @section('content')
        @include('admin.topmenu')
        @include('admin.sidebar')
        <div class="main-panel bg-{{$bg}}">
            <div class="content bg-{{$bg}}">
                <div class="page-inner">
                    <div class="mt-2 mb-5">
                        <h1 class="title1 d-inline text-{{$text}}">View Deposit Screenshot</h1>
                        <div class="d-inline">
                            <div class="float-right btn-group">
                                <a class="btn btn-primary btn-sm" href="{{route('mdeposits')}}"> <i class="fa fa-arrow-left"></i> back</a>
                            </div>
                        </div>
                    </div>
                    <x-danger-alert/>
                    <x-success-alert/>
                    <div class="mb-5 row">
                        <div class="col-lg-8 offset-lg-2 card p-4 bg-{{$bg}} shadow">
                             @if ($settings->location == "Email")
                                <h3 class="text-{{$text}}">Check your email with the deposit that has an attachment name of 
                                    <span class="text-danger">{{$deposit->proof}}</span>
                                </h3>
                            @elseif($settings->location == "Local")
                                <img src="{{ asset('storage/app/public/photos/'.$deposit->proof)}}" alt="Proof of Payment" class="img-fluid" />
                            @else
                                @php
                                $ppath = 'storage/'. $deposit->proof;
                                if (Storage::disk('s3')->exists($ppath)) {
                                    $passurl = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
                                    $passfile = Storage::disk('s3')->get($ppath);
                                    $psrc = $passurl.$passfile;
                                }else {
                                    $psrc = "";
                                }
                                @endphp
                                <img src="$psrc" alt="Proof of Payment" title="" class="img-fluid" />	
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    @endsection