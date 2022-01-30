<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $bg="light";
    $text = "dark";
    $gradient = "primary";
} else {
    $bg="dark";
    $text = "light";
    $gradient = "dark";
}

?>
@extends('layouts.app')
    @section('content')
        @include('admin.topmenu')
        @include('admin.sidebar')
        <div class="main-panel">
        <div class="content bg-{{$bg}}">
            <div class="panel-header bg-{{$gradient}}-gradient ">
                <div class="py-5 page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h2 class="pb-2 text-white fw-bold">Dashboard</h2>
                            <h5 class="mb-2 text-white op-7">Welcome, {{ Auth('admin')->User()->firstName }} {{ Auth('admin')->User()->lastName }}!</h5> 
                        </div>
                        <div class="py-2 ml-md-auto py-md-0">
                            <a href="{{route('mdeposits')}}" class="mr-2 btn btn-success btn-border ">Deposits</a>
                            <a href="{{route('mwithdrawals')}}" class="mr-2 btn btn-danger btn-border ">Withdrawals</a>
                            <a href="{{route('manageusers')}}" class="btn btn-secondary ">Users</a>
                        </div>
                    </div>
                </div>
            </div>
            <x-danger-alert/>
            <x-success-alert/>
            <div class="page-inner mt--5">
                <!-- Beginning of  Dashboard Stats  -->
                <div class="row row-card-no-pd bg-{{$bg}} shadow-lg mt--2">
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-{{$bg}} full-height">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="fa fa-download text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Total Deposit</p>
                                            @foreach($total_deposited as $deposited)
                                            @if(!empty($deposited->count))
                                            {{$settings->currency}}{{number_format($deposited->count)}}
                                            @else
                                            {{$settings->currency}}0.00
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-{{$bg}} full-height">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-download text-info"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Pending Deposit(s)</p>
                                            @foreach($pending_deposited as $deposited)
                                            @if(!empty($deposited->count))
                                            {{$settings->currency}}{{number_format($deposited->count)}}
                                            @else
                                            {{$settings->currency}}0.00
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-{{$bg}} full-height">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-arrows-1 text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Total Withdrawal</p>
                                            @foreach($total_withdrawn as $deposited)
                                            @if(!empty($deposited->count))
                                            {{$settings->currency}}{{number_format($deposited->count)}}
                                            @else
                                            {{$settings->currency}}0.00
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-{{$bg}} full-height">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-arrow text-secondary"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Pending Withdrawal</p>
                                            @foreach($pending_withdrawn as $deposited)
                                            @if(!empty($deposited->count))
                                            {{$settings->currency}}{{number_format($deposited->count)}}
                                            @else
                                            {{$settings->currency}}0.00
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-{{$bg}}">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-users text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Total Users</p>
                                            <h4 class="card-title text-{{$text}}">{{number_format($user_count)}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-{{$bg}}">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-remove-user text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Block Users</p>
                                            <h4 class="card-title text-{{$text}}">{{$blockeusers}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-{{$bg}}">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-user-2 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Active Users</p>
                                            <h4 class="card-title text-{{$text}}">{{$activeusers}}</h4> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-stats card-round bg-{{Auth('admin')->User()->dashboard_style}}">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="text-center icon-big">
                                            <i class="flaticon-diagram text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-8 col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Investment Plans</p>
                                            <h4 class="card-title text-{{$text}}">{{$plans}}</h4> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="overflow-auto">
                            <canvas id="myChart" height="100" class="text-{{$text}}" ></canvas>
                        </div>
                        
                        <script>
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Deposit', 'Pending Deposit', 'Withdrawal', 'Pending Withdrawal', 'Total Transactions'],
                                    datasets: [{
                                        label: "# System Statistics in {{$settings->currency}}",
                                        data: [
                                            "{{$chart_pdepsoit}}", 
                                            "{{$chart_pendepsoit}}",
                                            "{{$chart_pwithdraw}}", 
                                            "{{$chart_pendwithdraw}}", 
                                            "{{$chart_trans}}"
                                            ],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    @endsection