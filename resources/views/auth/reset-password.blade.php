@extends('layouts.guest')

@section('title', 'Reset your password')

@section('styles')
@parent

@endsection

@section('content')
<section class=" auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                   
                        @if(Session::has('message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                       
                        @endif

                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif   
                        
                    
                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                            <h4 class="text-center card-title">Create new password</h4>
                            <form method="POST" action="{{ route('password.update') }}"  class="mt-4 login-form">
                                 @csrf
                                 <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="pl-5 form-control" name ="email" value="{{ $email or old('email') }}"  id="email" placeholder="name@example.com" required>
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="help-block text-danger">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="pl-5 form-control" name="password" name="password" id="password" placeholder="Enter Password" required>
                                            </div>
                                            
                                            @if ($errors->has('password'))
                                            <span class="help-block text-danger">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Password Confirmation<span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="pl-5 form-control" name="password_confirmation" name="password" id="password" placeholder="Enter Password" required>
                                            </div>
                                            
                                            @if ($errors->has('password_confirmation'))
                                            <span class="help-block text-danger">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="submit">Reset Password</button>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center col-12">
                                        <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright  {{date('Y')}} &nbsp; {{$settings->site_name}} &nbsp; All Rights Reserved.</small>
                                        </p>
                                    </div>
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->



@endsection

@section('scripts')
@parent

@endsection