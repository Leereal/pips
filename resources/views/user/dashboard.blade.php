<?php
if (Auth::user()->dashboard_style == "light") {
    $bg="light";
    $text = "dark";
} else {
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
                        <h2 class="text-{{$text}} pb-2">Welcome, {{ Auth::user()->name }}!</h2>
                            @if ($settings->enable_annoc == "on")
                                <h5 id="ann" class="text-{{$text}}op-7 mb-4">{{$settings->newupdate}}</h5>
                                @if(Session::has('getAnouc') && Session::get('getAnouc') == "true" )
                                    <script type="text/javascript">
                                        var announment = $("#ann").html();
                                        console.log(announment);
                                        swal({
                                            title: "Attention!",
                                            text: announment,
                                            icon: "info",
                                            buttons: {
                                                confirm: {
                                                    text: "Okay",
                                                    value: true,
                                                    visible: true,
                                                    className: "btn btn-info",
                                                    closeModal: true
                                                }
                                            }
                                        });
                                    </script>  
                                @endif
                                {{session()->forget('getAnouc')}}
                            @endif

                    </div>
                    <x-danger-alert/>
					<x-success-alert/>
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-{{$bg}} shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-secondary">
                                        <i class="fa fa-dollar-sign"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-{{$text}}"><b>{{$settings->currency}}{{ number_format(Auth::user()->account_bal, 2, '.', ',')}}</b></h5>
                                        <small class="text-muted">Account Balance</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-{{$bg}} shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-success">
                                        <i class="fa fa-coins"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-{{$text}}"><b>{{$settings->currency}}{{ number_format(Auth::user()->roi, 2, '.', ',')}}</b></h5>
                                        <small class="text-muted text-{{$text}}">Total Profit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-{{$bg}} shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-secondary">
                                        <i class="fa fa-gift"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-{{$text}}"><b>{{$settings->currency}}{{ number_format(Auth::user()->bonus, 2, '.', ',')}}</b></h5>
                                        <small class="text-muted text-{{$text}}">Total Bonus</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-{{$bg}} shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-info">
                                        <i class="fa fa-retweet"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-{{$text}}"><b>{{$settings->currency}}{{ number_format(Auth::user()->ref_bonus, 2, '.', ',')}}</b></h5>
                                        <small class="text-muted text-{{$text}}">Total Referral Bonus</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-{{$bg}} shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-danger">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-{{$text}}"><b>{{$user_plan->count()}}</b></h5>
                                        <small class="text-muted text-{{$text}}">Total Investment Plans</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-{{$bg}} shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-success">
                                        <i class="fa fa-envelope-open"></i>
                                    </span>
                                    <div>
                                        <h5 class="mb-1 text-{{$text}}"><b>{{$user_plan_active->count()}}</b></h5>
                                        <small class="text-muted text-{{$text}}">Total Active Investment Plans</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-{{$bg}} shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-warning">
                                        <i class="fa fa-download"></i>
                                    </span>
                                    <div>
                                        @foreach($deposited as $deposited)
                                            @if(!empty($deposited->count))
                                            <h5 class="mb-1 text-{{$text}}"><b>{{$settings->currency}}{{ number_format($deposited->count, 2, '.', ',')}}</b></h5>
                                            @else
                                            <h5 class="mb-1 text-{{$text}}">{{$settings->currency}}0.00</h5> 
                                            @endif
                                        @endforeach
                                        
                                        <small class="text-muted text-{{$text}}">Total Deposit</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="p-3 card bg-{{$bg}} shadow">
                                <div class="d-flex align-items-center">
                                    <span class="mr-3 stamp stamp-md bg-danger">
                                        <i class="fa fa-arrow-alt-circle-up"></i>
                                    </span>
                                    <div>
                                        @foreach($deposited as $deposited)
                                            @if(!empty($deposited->count))
                                            <h5 class="mb-1 text-{{$text}}"><b>{{$settings->currency}}{{ number_format($deposited->count, 2, '.', ',')}}</b></h5>
                                            @else
                                            <h5 class="mb-1 text-{{$text}}">{{$settings->currency}}0.00</h5> 
                                            @endif
                                        @endforeach
                                        
                                        <small class="text-muted text-{{$text}}">Total Withdrawals</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="pt-1 col-12">
                        <h3>Personal Trading Chart</h3>
                        @include('includes.chart')
                        </div>
                    </div>
                <!-- end of chart -->
            </div>
    @endsection
   
    