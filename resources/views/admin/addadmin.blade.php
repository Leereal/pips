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
                <div class="mt-2 mb-4">
                <h1 class="title1 text-{{$text}}">Add New Manager</h1>
                </div>
                <x-danger-alert/>
            <x-success-alert/>
                <div class="mb-5 row">
                    <div class="col-lg-8 offset-lg-2 card p-3 bg-{{Auth('admin')->User()->dashboard_style}} shadow">
                        <form method="POST" action="{{ url('admin/dashboard/saveadmin') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <h4 class="text-{{$text}}">First Name</h4>
                                <div>
                                    <input id="name" type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="fname" value="{{ old('fname') }}" required>
                                    @if ($errors->has('fname'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('l_name') ? ' has-error' : '' }}">
                                <h4 class="text-{{$text}}">Last Name</h4>
                                <div>
                                    <input id="name" type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="l_name" value="{{ old('l_name') }}" required>
                                    @if ($errors->has('l_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('l_name') }}</strong>
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
                            <div class="form-group">
                                <h4 class="text-{{$text}}">Type</h4>
                                <select class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="type">
                                    <option>Super Admin</option>
                                    <option>Admin</option>
                                </select><br>
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
                                    <button type="submit" class="px-3 btn btn-primary btn-lg">
                                        <i class="fa fa-plus"></i> Save User
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection