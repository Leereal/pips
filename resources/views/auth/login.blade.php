@extends('layouts.guest')

@section('title', 'User Login')

@section('styles')
@parent

@endsection

@section('content')
<section class=" auth">
    <div class="container">
        <div class="pb-3 row justify-content-center">

            <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                <a href="/"><img src="{{ asset('storage/app/public/photos/'.$settings->logo)}}" alt=""
                        class="mb-3 img-fluid auth__logo"></a>

                @if(Session::has('status'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="text-white close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
                @endif
                <div class="bg-white shadow card login-page roundedd border-1 ">
                    <div class="card-body">
                        <h4 class="text-center card-title">Welcome</h4>
                        <form method="POST" action="{{ route('login') }}" class="mt-4 login-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Your Email <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="email" class="pl-5 form-control" name="email"
                                                value="{{ old('email') }}" id="email" placeholder="name@example.com"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="pl-5 form-control" name="password"
                                                id="password" placeholder="Enter Password" required>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1"
                                                    name="remember">
                                                <label class="custom-control-label" for="customCheck1">Remember
                                                    me</label>
                                            </div>
                                        </div>
                                        <p class="mb-0 forgot-pass"><a href="{{ route('password.request') }}"
                                                class="text-dark font-weight-bold">Forgot password ?</a></p>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="mb-0 col-lg-12">
                                    <button class="btn btn-primary btn-block pad" type="submit">Sign in</button>
                                </div>
                                <!--end col-->

                                <div class="mt-4 text-center col-lg-12">
                                    @if($settings->enable_social_login == "yes")
                                    <h6>Or Login With</h6>
                                    <div class="row">

                                        <!--end col-->
                                        <div class="mt-3 col-12">
                                            <a href="{{route('social.redirect', ['social' => 'google'])}}"
                                                class="btn btn-block btn-light"><i
                                                    class="mdi mdi-google text-danger"></i> Google</a>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    @endif
                                </div>
                                <!--end col-->
                                <!--end col-->

                                <div class="text-center col-12">
                                    <p class="mt-3 mb-0"><small class="mr-2 text-dark">Don't have an account
                                            ?</small> <a href="{{ route('register') }}"
                                            class="text-dark font-weight-bold">Sign Up</a></p>
                                </div>
                                <!--end col-->

                                <div class="text-center col-12">
                                    <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright {{date('Y')}}
                                            &nbsp; {{$settings->site_name}} &nbsp; All Rights Reserved.</small>
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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/61a8beb553b398095a672207/1fltihuif';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
@endsection
