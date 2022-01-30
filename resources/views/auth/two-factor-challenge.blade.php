@extends('layouts.guest')

@section('title', 'TwoFactor Login')

@section('styles')
@parent
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
@endsection
@section('content')
<div x-data="{ recovery: false }">
    <section class=" auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                    <a href="/"><img src="{{ asset('storage/app/public/photos/'.$settings->logo)}}" alt="" class="mb-3 img-fluid auth__logo"></a>
                    
                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                            <div class="mb-4 text-center">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="mb-4 text-sm text-center text-dark" x-show="! recovery">
                                    {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                                </div>
                        
                                <div class="mb-4 text-sm text-center text-dark" x-show="recovery">
                                    {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                                </div>
                            </div>
                            <form method="POST" action="{{ route('two-factor.login') }}"  class="mt-4 login-form">
                                 @csrf
                                <div class="row">
                                    <div class="col-lg-12" x-show="! recovery">
                                        <div class="form-group">
                                            <label>{{ __('Code') }}<span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input id="code" type="text" inputmode="numeric" class="pl-5 form-control" name="code" autofocus x-ref="code" autocomplete="one-time-code">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                     <div class="col-lg-12"  x-show="recovery">
                                        <div class="form-group">
                                            <label>{{ __('Recovery Code') }}<span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input id="recovery_code" class="block w-full pl-5 mt-1 form-control" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    

                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="button"
                                             x-show="! recovery"
                                                    x-on:click="
                                                        recovery = true;
                                                        $nextTick(() => { $refs.recovery_code.focus() })
                                                    ">
                                        {{ __('Use a recovery code') }}
                                        </button>
                                    </div>
                                    
                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="button"
                                            x-show="recovery"
                                                    x-on:click="
                                                        recovery = false;
                                                        $nextTick(() => { $refs.code.focus() })
                                                    ">
                                        {{ __('Use an authentication code') }}
                                        </button>
                                    </div>
                                    <div class="mb-0 col-lg-12">
                                        <x-jet-button class="mt-4 btn btn-primary btn-block">
                                        {{ __('Log in') }}
                                        </x-jet-button>
                                    </div>
                                    <!--end col-->

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
    </div>



@endsection

@section('scripts')
@parent

@endsection