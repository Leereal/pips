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
                <div class="mt-2 mb-4">
                    <h1 class="text-{{$text}}">{{$title}}</h1>	
                </div>
                @if(Session::has('message'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> {{ Session::get('message') }}
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
    
                <div class="mb-3 row">
                    <div class="p-2 shadow-lg col-md-4 bg-primary">
                        <h1 class="text-white"> Current Package:</h1>
                    </div>
                    <div class="col-md-8 bg-{{$bg}} shadow-lg text-{{$text}} p-3" >
                        <p style="color:#999;">ACTIVATED ON: {{\Carbon\Carbon::parse($cplan->created_at)->toDayDateTimeString()}}</p>
                        <h4> <strong>PACKAGE NAME:</strong> {{$cplan->dplan->name}}</h4>
                        <h4> <strong>AMOUNT:</strong> {{$settings->currency}}{{$cplan->amount}}</h4>
                        <h4><strong>DURATION:</strong> {{$cplan->inv_duration}}</h4>
                        @if($cplan->active=="yes")
                        <p style="color:green;">Active! <i class="glyphicon glyphicon-ok"></i></p>
                        @elseif($cplan->active=="expired")
                        <p style="color:#fa3425;">Expired! <i class="fa fa-info-circle"></i></p>
                        @else
                        <p style="color:#fa3425;">Inactive! <i class="fa fa-info-circle"></i></p>
                        @endif
                    </div>
                </div>
                <div class="p-3 shadow-lg row ">
                    <div class="mb-3 col-lg-12">
                        <a href="{{ url('dashboard/buy-plan') }}" class="btn btn-lg btn-{{$text}} nav-pills"> <i class="fa fa-plus"></i> Add plan</a>
                        <h1 class="text-{{$text}} my-3">Concurrent Packages:</h1>
                    </div>
                    @foreach($plans as $plan)
                    @if($cplan->id != $plan->id)
                    <div class="col-lg-4">
                        <div class="border shadow card">
                            <div class="card-body bg-{{$bg}}">
                                {{-- <i class="fa fa-th" style="font-size:50px; color: white;"></i> --}}
                                    <h1 class="text-{{$text}}">{{$plan->dplan->name}}</h1>
                                    <p style="color:#999;">ACTIVATED ON: {{\Carbon\Carbon::parse($plan->created_at)->toDayDateTimeString()}}</p>

                                    @if($plan->dplan->increment_type=="Fixed")
                                    <h5 class="text-{{$text}}"> <b>ROI: </b>  {{$settings->currency.$plan->dplan->increment_amount}}</h5>
                                    @else
                                    <h5 class="text-{{$text}}"> <b>ROI: </b>{{$plan->dplan->increment_amount}}%</h5>
                                    @endif
                                    <h5 class="text-{{$text}}"> <b>INTERVAL: </b>{{$plan->dplan->increment_interval}}</h5>
                                    <h5 class="text-{{$text}}"> <b>AMOUNT:</b> {{$settings->currency}}{{$plan->amount}}</h5> 
                                    <h5 class="text-{{$text}}"> <b>DURATION: </b>{{$plan->inv_duration}}</h5>
                                    <h5 class="text-{{$text}}"> <b>MIN RETURN: </b>{{$settings->currency.$plan->dplan->minr}}</h5>
                                    <h5 class="text-{{$text}}"> <b>MAX RETURN: </b>{{$settings->currency.$plan->dplan->maxr}}</h5>
                                    @if($plan->active=="yes")
                                    <p style="color:green;">Active! <i class="glyphicon glyphicon-ok"></i></p>
                                    @elseif($plan->active=="expired")
                                    <p style="color:#fa3425;">Expired! <i class="fa fa-info-circle"></i></p>
                                    @else
                                    <p style="color:#fa3425;">Inactive! <i class="fa fa-info-circle"></i></p>
                                    @endif
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
@endsection