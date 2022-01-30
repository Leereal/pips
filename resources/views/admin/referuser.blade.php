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
        <div class="content bg-{{Auth('admin')->User()->dashboard_style}} ">
            <div class="page-inner">
                <div class="mt-2 mb-4">
                    <h1 class="title1 text-{{$text}}">Add New users to {{$settings->site_name}} community</h1>
                </div>
                @if(Session::has('message'))
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i> {{Session::get('message')}}
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
                <div class="mb-5 row">
                    <div class="col-lg-8 offset-lg-2 card p-3 bg-{{Auth('admin')->User()->dashboard_style}} shadow">
                        <form method="POST" action="{{ url('admin/dashboard/saveuser') }}">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                  <label for="f_name">Username</label>
                                  <input type="text" class="mr-2 form-control" name="username" placeholder="Enter Unique Username" required>
                                    @if ($errors->has('username'))
                                    <small class="text-danger">{{ $errors->first('username') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <h4 class="text-{{$text}}">FullName</h4>
                                <div>
                                    <input id="name" type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="name" value="{{ old('name') }}" required>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              
                                <h4 class="text-{{$text}}">E-Mail Address</h4>
                                <div>
                                    <input id="email" type="email" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                
                                <h4 class="text-{{$text}}">Phone number</h4>
                                <div>
                                    <input id="phone" type="number" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="phone" value="{{ old('phone') }}" required>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                
                                <h4 class="text-{{$text}}">Password</h4>
                                <div>
                                    <input id="password" type="password" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <h4 class="text-{{$text}}">Confirm Password</h4>

                                <div>
                                    <input id="password-confirm" type="password" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <button type="submit" class="px-5 btn btn-primary btn-lg">
                                        <i class="fa fa-btn fa-user"></i> Save User
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection