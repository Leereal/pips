<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
    $bg = 'light';
} else {
    $text = "light";
    $bg = 'dark';
}
?>
@extends('layouts.app')
@section('content')
    @include('admin.topmenu')
    @include('admin.sidebar')
    <div class="main-panel">
    <div class="content bg-{{Auth('admin')->User()->dashboard_style}}">
        <div class="page-inner">
            <x-danger-alert/>
            <x-success-alert/>
            <!-- Beginning of  Dashboard Stats  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="p-3 card bg-{{$bg}}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <h1 class="d-inline text-primary">{{$user->name}}</h1><span></span>
                                    <div class="d-inline">
                                        <div class="float-right btn-group">
                                            <a class="btn btn-primary btn-sm" href="{{route('manageusers')}}"> <i class="fa fa-arrow-left"></i> back</a> &nbsp;
                                            <button type="button" class="btn btn-secondary dropdown-toggle btn-sm" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
                                              Actions
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-lg-right">
                                                <a class="dropdown-item" href="{{ route('loginactivity', $user->id) }}">Login Activity</a>
                                                @if($user->status==NULL || $user->status=='blocked')
                                                <a class="dropdown-item" href="{{ url('admin/dashboard/uunblock') }}/{{$user->id}}">Unblock</a> 
                                                @else
                                                <a class="dropdown-item" href="{{ url('admin/dashboard/uublock') }}/{{$user->id}}">Block</a>
                                                @endif
                                                @if($user->trade_mode=='on')
                                                <a class="dropdown-item" href="{{ url('admin/dashboard/usertrademode') }}/{{$user->id}}/off">Turn off trade</a> 
                                                @else
                                                <a class="dropdown-item" href="{{ url('admin/dashboard/usertrademode') }}/{{$user->id}}/on">Turn on trade</a>
                                                @endif
                                                @if($user->email_verified_at)
                                                
                                                @else
                                                <a href="{{url('admin/dashboard/email-verify')}}/{{$user->id}}" class="dropdown-item">Verify Email</a>
                                                @endif
                                                <a href="#"  data-toggle="modal" data-target="#topupModal" class="dropdown-item">Credit/Debit</a>
                                                <a href="#" data-toggle="modal" data-target="#resetpswdModal"  class="dropdown-item">Reset Password</a>
                                                <a href="#" data-toggle="modal" data-target="#clearacctModal" class="dropdown-item">Clear Account</a>
                                                <a href="#" data-toggle="modal" data-target="#TradingModal" class="dropdown-item">Add Trading History</a>
                                                <a href="#" data-toggle="modal" data-target="#edituser" class="dropdown-item">Edit</a>
                                                <a href="#" data-toggle="modal" data-target="#sendmailtooneuserModal" class="dropdown-item">Send Email</a>
                                                <a href="#" data-toggle="modal" data-target="#switchuserModal"  class="dropdown-item text-success">Login as {{$user->name}}</a>
                                                <a href="#" data-toggle="modal" data-target="#deleteModal" class="dropdown-item text-danger">Delete {{$user->name}}</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 mt-4 border rounded row text-{{$text}}">
                                <div class="col-md-3">
                                    <h5 class="text-bold">Account Balance</h5>
                                    <p>{{$settings->currency}}{{number_format($user->account_bal)}}</p>
                                </div>
                                <div class="col-md-3">
                                    <h5>Profit</h5>
                                    <p>{{$settings->currency}}{{number_format($user->roi)}} </p>
                                </div>
                                <div class="col-md-3">
                                    <h5>Referral Bonus</h5>
                                    <p>{{$settings->currency}}{{number_format($user->ref_bonus)}}</p>
                                </div>
                                <div class="col-md-3">
                                    <h5>Bonus</h5>
                                    <p>{{$settings->currency}}{{number_format($user->bonus)}}</p>
                                </div>
                                <div class="col-md-3">
                                    <h5>User Account Status</h5>
                                    @if ($user->status == "blocked")
                                    <span class="badge badge-danger">Blocked</span>
                                    @else
                                    <span class="badge badge-success">Active</span>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <h5>Inv. Plans</h5>
                                    {{-- <span class="text-bold"> <strong>2</strong> </span> --}}
                                    @if ($user->plan != NULL)
                                      <a class="btn btn-sm btn-primary d-inline" href="{{route('user.plans', $user->id)}}">View Plans</a>  
                                    @else
                                        <p>No Investment Plan</p>
                                    @endif
                                    
                                </div>
                                <div class="col-md-3">
                                    <h5>KYC</h5>
                                    @if ($user->account_verify == "Not Verified" || $user->account_verify == NULL)
                                    <span class="badge badge-danger">Not Verified Yet</span>
                                    @else
                                    <span class="badge badge-success">Verified</span>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <h5>Trade Mode</h5>
                                    @if ($user->trade_mode == "off" || $user->trade_mode == NULL)
                                    <span class="badge badge-danger">Off</span>
                                    @else
                                    <span class="badge badge-success">On</span>
                                    @endif
                                </div>
                            </div>
                            <div class="mt-3 row text-{{$text}}">
                                <div class="col-md-12">
                                    <h5>USER INFORMATION</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-{{$text}}">
                                <div class="col-md-4 border-right">
                                    <h5>Fullname</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$user->name}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-{{$text}}">
                                <div class="col-md-4 border-right">
                                    <h5>Email Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$user->email}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-{{$text}}">
                                <div class="col-md-4 border-right">
                                    <h5>Mobile Number</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$user->phone}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-{{$text}}">
                                <div class="col-md-4 border-right">
                                    <h5>Date of birth</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$user->dob}}</h5>
                                </div>
                            </div>
                            <div class="p-3 border row text-{{$text}}">
                                <div class="col-md-4 border-right">
                                    <h5>Nationality</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{$user->country}}</h5>
                                </div>
                            </div>
                            {{-- <div class="p-3 border row ">
                                <div class="col-md-4 border-right">
                                    <h5>Wallet Address</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>@if ($user->wallet_address)
                                    {{$user->wallet_address}}
                                   @else
                                   Not added yet!
                                   @endif</h5>
                                </div>
                            </div> --}}
                            <div class="p-3 border row text-{{$text}}">
                                <div class="col-md-4 border-right">
                                    <h5>Registered</h5>
                                </div>
                                <div class="col-md-8">
                                   <h5>{{\Carbon\Carbon::parse($user->created_at)->toDayDateTimeString()}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.Users.users_actions')
@endsection