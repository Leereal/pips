@extends('layouts.guest')

@section('title', 'Creaet Account')

@section('styles')
@parent

@endsection

@section('content')
<section class="y auth">
    <div class="container">
        <div class="pb-3 row justify-content-center">

            <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                <a href="/"><img src="{{ asset('storage/app/public/photos/'.$settings->logo)}}" alt=""
                        class="mb-3 img-fluid auth__logo"></a>

                @if(Session::has('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif


                <div class="bg-white shadow card login-page roundedd border-1 ">
                    <div class="card-body">
                        <h4 class="text-center card-title">Create an Account</h4>
                        <form method="POST" action="{{ route('register') }}" class="mt-4 login-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>UserName <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="text" id="input1" class="pl-5 form-control" name="username"
                                                id="input1" placeholder="Enter Unique Username" required>

                                            @if ($errors->has('username'))
                                            <small class="text-danger">{{ $errors->first('username') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>FullName <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <i data-feather="user-check" class="fea icon-sm icons"></i>
                                            <input type="text" class="pl-5 form-control" name="name"
                                                value="{{ old('name') }}" id="f_name" placeholder="Enter FullName"
                                                required>

                                            @if ($errors->has('name'))
                                            <small class="text-danger">{{ $errors->first('name') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Your Email <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="email" class="pl-5 form-control" name="email"
                                                value="{{ old('email') }}" id="email" placeholder="name@example.com"
                                                required>
                                            @if ($errors->has('email'))
                                            <small class="text-danger">{{ $errors->first('email') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->



                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Phone Number <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <i data-feather="phone" class="fea icon-sm icons"></i>
                                            <input type="phone" class="pl-5 form-control" name="phone"
                                                value="{{ old('phone') }}" id="phone" placeholder="Enter Phone number"
                                                required>
                                            @if ($errors->has('phone'))
                                            <small class="text-danger">{{ $errors->first('phone') }}</small>
                                            @endif

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
                                            @if ($errors->has('password'))
                                            <small class="text-danger">{{ $errors->first('password') }}</small>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Confirm Password <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="pl-5 form-control"
                                                name="password_confirmation" value="{{ old('password_confirmation') }}"
                                                id="confirm-password" placeholder="Confirm Password" required>
                                            @if ($errors->has('password'))
                                            <small class="text-danger">{{ $errors->first('password') }}</small>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-md-12">
                                    <div class="form-group ">
                                        <label>Country <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                            <select class="pl-5 form-control" name="country" id="country" required>
                                                <option selected disabled>Choose Country</option>
                                                @include('auth.countries')
                                            </select>
                                        </div>
                                        <small>If country is not selecting proceed</small>
                                        @if ($errors->has('country'))
                                        <small class="text-danger">{{ $errors->first('country') }}</small>
                                        @endif
                                    </div>
                                </div>

                                @if(Session::has('ref_by'))
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Referral ID</label>
                                        <div class="position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="text" class="pl-5 form-control" value="{{session('ref_by')}}"
                                                name="ref_by" placeholder="optional referral id" readonly>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Referral ID <span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                            <input type="text" class="pl-5 form-control" name="ref_by"
                                                placeholder="optional referral id">
                                        </div>
                                    </div>
                                </div>
                                @endif

                                @if($settings->captcha == "true")
                                <div class="col-lg-12">
                                    <div
                                        class="form-group  {{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                        <label>Captcha<span class="text-danger">*</span></label>
                                        <div class="position-relative">
                                            {!! NoCaptcha::display() !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($terms->useterms =='yes')
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1"
                                                required>
                                            <label class="custom-control-label" for="customCheck1">I Accept the <a
                                                    href="{{route('privacy')}}" class="text-primary">Terms And Privacy
                                                    Policy</a></label>
                                        </div>
                                    </div>
                                </div>
                                @endif

                                <!--end col-->

                                <div class="mb-0 col-lg-12">
                                    <button class="btn btn-primary btn-block pad" type="submit">Register</button>
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
                                    <p class="mt-3 mb-0"><small class="mr-2 text-dark">Already have an account
                                        </small> <a href="{{ route('login') }}"
                                            class="text-dark font-weight-bold">Login</a></p>
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
<script>
    $('#input1').on('keypress', function(e) {
        return e.which !== 32;
    });
</script>
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
