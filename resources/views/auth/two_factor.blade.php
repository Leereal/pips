@extends('layouts.guest')

@section('title', 'Two factor login')

@section('styles')
@parent

@endsection

@section('content')
<section class=" auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                   
                    @if(Session::has('message'))
                    <div class="alert alert-danger alert-dismissible fade show " role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    
                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                            <p class="text-center card-title">A 2FA authentication code has been sent to your email, kindly check your email and enter code below to continue.</p>
                            <form method="POST" action="{{ route('twofalogin') }}"  class="mt-4 login-form">
                                 @csrf
                                
                                <div class="row">
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Two Factor Code<span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="pl-5 form-control" name="twofa" id="2fa" placeholder="Enter the code you receive here" required>
                                            </div>
                                            
                                           @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('2fa') }}</strong>
                                            </span>
                                            @endif
                                            
                                        </div>
                                    </div>
                                    <!--end col-->
                                    
                                <div class="mb-0 col-lg-12">
                                    <button class="btn btn-primary btn-block pad" type="submit">Proceed</button>
                                </div>
                                <!--end col-->
                                
                                <div class="mb-1 text-center col-12">
                                    <p class="mt-4 mb-0 text-center ">Are you Stucked Here ?<a href="{{ route('adminlogout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" class="">
                                        Repeat login
                                        </a>
                                    </p>
                                </div>

                                </div>
                                <!--end row-->
                            </form>
                            <form id="logout-form" action="{{ route('adminlogout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
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