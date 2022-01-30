?php
header("location: https://pipsbulls.com");
?>
@extends('layouts.base')

@section('title', $settings->site_title)

@section('styles')
@parent

@endsection
@inject('content', 'App\Http\Controllers\FrontController')
@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 bg-soft-primary d-table w-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <div class="mt-4 title-heading">
                        <div class="shadow alert alert-primary-light alert-pills " role="alert">
                            <span class="content ">{{$content->getContent('rXJ7JQ','title')}}</span>
                        </div>
                        <h1 class="mb-3 heading">{{$content->getContent('Mnag31','title')}}</h1>
                        <p class="para-desck text-dark">{{$content->getContent('Mnag31','description')}}</p>
                        <div class="mt-4">
                            <a href="{{url('/register')}}" class="pt-3 pb-3 pl-4 pr-4 btn btn-primary">Create Free
                                Account
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-6 col-md-5 mt-sm-0 pt-sm-0">
                    <div class="position-relative">
                        <img src="{{ asset('storage/app/public/photos/'.$content->getImage('b9158B','img_path'))}}" class="mx-auto roundedd img-fluid d-block"
                            alt="">
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- TradingView Widget BEGIN -->
    <div
        style="height:62px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #FFFFFF; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; padding:1px;padding: 0px; margin: 0px; width: 100%;">
        <div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe
                src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover="
                width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0"
                style="border:0;margin:0;padding:0;"></iframe></div>
        <div
            style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
        </div>
    </div>
    <!-- TradingView Widget END -->

    <!-- Security Section Start -->
    <section class="overflow-hidden section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-12">
                    <div class="pb-2 mb-4 section-title">

                        <h4 class="mb-4 title">{{$content->getContent('J23T0Y','title')}}</h4>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="pt-2 mt-4 col-md-6 col-12">
                    <div class="text-center border-0 rounded card">
                        <div class="card-body">
                            <div class="p-3 shadow bg-soft-primary roundedd d-inline-block">
                                <img src="{{ asset('temp/images/icon/key.svg') }}" class="avatar avatar-small"
                                    alt="">
                            </div>
                            <div class="mt-4">
                                <h5><a href="javascript:void(0)" class="text-dark">{{$content->getContent('9HOR1z','title')}}</a></h5>
                                <p class="mt-3 mb-0 text-muted">{{$content->getContent('9HOR1z','description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->



                <div class="pt-2 mt-4 col-md-6 col-12">
                    <div class="text-center border-0 rounded card">
                        <div class="card-body">
                            <div class="p-3 shadow bg-soft-primary roundedd d-inline-block">
                                <img src="{{ asset('temp/images/icon/locked.svg') }}" class="avatar avatar-small"
                                    alt="">
                            </div>
                            <div class="mt-4">
                                <h5><a href="javascript:void(0)" class="text-dark">{{$content->getContent('7DH2G9','title')}}</a></h5>
                                <p class="mt-3 mb-0 text-muted">{{$content->getContent('7DH2G9','description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!-- End Security Section Start -->

    <!-- Features Section Start -->
    <section class="overflow-hidden section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-lg-7 col-md-7">
                    <div class="pb-2 mb-4 section-title">

                        <h4 class="mb-4 title "> {{$content->getContent('5Vg32I','title')}}</h4>
                        <p class="mx-auto mb-0 text-muted para-desc">{{$content->getContent('5Vg32I','description')}}</p>
                    </div>
                </div>
                <!--end col-->

            </div>
            <!--end row-->


            <!--end col-->

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-8">
                    <div class="pt-2 mt-4 row">
                        <div class="col-md-6 col-12">
                            <div class="pt-4 pb-4 media features">
                                <div class="mt-2 mr-3 text-center icon rounded-circle text-primary">
                                    <i data-feather="activity" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title"> {{$content->getContent('Vg6Gy7','title')}}</h4>
                                    <p class="mb-0 text-muted para">{{$content->getContent('Vg6Gy7','description')}}</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="pt-4 pb-4 media features">
                                <div class="mt-2 mr-3 text-center icon rounded-circle text-primary">
                                    <i data-feather="credit-card" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">{{$content->getContent('1Sx1dl','title')}}</h4>
                                    <p class="mb-0 text-muted para">{{$content->getContent('1Sx1dl','description')}}</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="pt-4 pb-4 media features">
                                <div class="mt-2 mr-3 text-center icon rounded-circle text-primary">
                                    <i data-feather="zap" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">{{$content->getContent('YYqKx3','title')}}</h4>
                                    <p class="mb-0 text-muted para">{{$content->getContent('YYqKx3','description')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="pt-4 pb-4 media features">
                                <div class="mt-2 mr-3 text-center icon rounded-circle text-primary">
                                    <i data-feather="shield" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">{{$content->getContent('yGg8xI','title')}}</h4>
                                    <p class="mb-0 text-muted para">{{$content->getContent('yGg8xI','description')}}</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-md-6 col-12">
                            <div class="pt-4 pb-4 media features">
                                <div class="mt-2 mr-3 text-center icon rounded-circle text-primary">
                                    <i data-feather="message-circle" class="fea icon-ex-md text-primary"></i>
                                </div>
                                <div class="media-body">
                                    <h4 class="title">{{$content->getContent('xEWMho','title')}}</h4>
                                    <p class="mb-0 text-muted para">{{$content->getContent('xEWMho','description')}}</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->


                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 text-center col-lg-4 col-md-4 col-12 text-md-right">
                    <img src="{{ asset('temp/images/app/phone.png') }}" class="img-fluid" alt="">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- End Features Section Start -->


    <!-- INv Section Start -->
    <section class="overflow-hidden section bg-soft-primary">
        <div class="container mt-100 mt-60 ">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <img src="{{ asset('temp/images/app/laptop.png') }}" class="img-fluid " alt="">
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-6 col-md-6 mt-sm-0 pt-sm-0">
                    <div class="section-title ml-lg-5">
                        <h4 class="mb-4 title">{{$content->getContent('9SOtK1','title')}}
                        </h4>
                        <p class="text-muted">{{$content->getContent('9SOtK1','description')}}</p>

                        <a href="{{url('/about')}}" class="mt-3 h6 text-primary">Find Out More <i
                                class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- INv Section Start -->


    <!-- Pricing Section Start -->
    <section class="mt-4 overflow-hidden section" id="pricing">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pb-2 mb-4 text-center section-title">
                        <h4 class="mb-4 title"><span class="text-primary">{{$content->getContent('vr6Xw0','title')}}</span></h4>
                        <p class="mx-auto mb-0 para-desc text-muted">{{$content->getContent('vr6Xw0','description')}}</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">

                @foreach ($plans as $plan)
                    <div class="pt-2 mt-4 col-lg-4 col-md-6">
                        <div class="p-4 border-0 rounded-md shadow card pricing-rates business-rate">
                            <div class="p-0 card-body">
                                <span
                                    class="px-4 py-2 mb-0 rounded-lg d-inline-block bg-soft-primary h6 text-primary">{{ $plan->name }}</span>
                                <h2 class="mt-3 mb-0 font-weight-bold">{{ $settings->currency }} {{ $plan->price }}
                                </h2>
                                <p class="text-muted">{{$plan->expiration}}</p>



                                <ul class="pt-3 list-unstyled border-top">
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>Min. Possible
                                        deposit:
                                        {{ $settings->currency }}{{ $plan->min_price }}</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>Max. Possible
                                        deposit:
                                        {{ $settings->currency }}{{ $plan->max_price }}</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>{{ $settings->currency }}{{ $plan->minr }}
                                        Minimum return</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>{{ $settings->currency }}{{ $plan->maxr }}
                                        Maximum return</li>
                                    <li class="mb-0 h6 text-muted"><span class="mr-2 text-primary h5"><i
                                                class="align-middle uil uil-check-circle"></i></span>{{ $settings->currency }}{{ $plan->gift }}
                                        Gift Bonus</li>
                                </ul>

                                <div class="mt-4">
                                    <a href="login" class="btn btn-block btn-primary">Buy Now</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                @endforeach


                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!-- End Pricing Section Start -->


    <!-- Crypto price Section Start -->

    <section class="mt-5 overflow-hidden section bg-soft-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-12">
                    <div class="pb-2 mb-4 section-title">
                        <h4 class="mb-4 title">{{$content->getContent('wOS1ve','title')}}</h4>
                        <p class="mx-auto mb-0 text-muted para-desc">
                            {{$content->getContent('wOS1ve','description')}}</p>
                    </div>
                </div>
                <!--end col-->
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="market-box ">
                        <div class="market-content">
                            <coingecko-coin-ticker-widget coin-id="bitcoin" currency="usd" width="0" locale="en"
                                background-color="#01395e"></coingecko-coin-ticker-widget>
                        </div>

                        <!--pattern end-->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="market-box">
                        <div class="market-content">
                            </script>
                            <coingecko-coin-ticker-widget coin-id="ethereum" currency="usd" width="0" locale="en"
                                background-color="#01395e"></coingecko-coin-ticker-widget>
                        </div>
                        <!--pattern start-->

                        <!--pattern end-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="market-box">
                        <div class="market-content">
                            <coingecko-coin-ticker-widget coin-id="litecoin" currency="usd" width="0" locale="en"
                                background-color="#01395e"></coingecko-coin-ticker-widget>
                        </div>
                        <!--pattern start-->

                        <!--pattern end-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Crypto price Section Start  End-->


    <!-- Testimonial Section Start -->
    <section class="mt-5 overflow-hidden section">
        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="text-center col-12">
                    <div class="pb-2 mb-4 section-title">
                        <h4 class="mb-4 title">{{$content->getContent('SMsJr1','title')}}</h4>
                        <p class="mx-auto mb-0 text-muted para-desc">{{$content->getContent('SMsJr1','description')}}</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="mt-4 row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div id="single-owl" class="owl-carousel owl-theme">
                        @foreach ($test as $testimony)
                           <!-- Review Start -->
                        <div class="m-2 overflow-hidden border-0 card roundedd">
                            <div class="row align-items-center no-gutters">
                                <div class="col-md-5">
                                    <img src="{{ asset('storage/app/public/photos/'.$testimony->picture)}}" class="img-fluid w-75"
                                        alt="">
                                </div>
                                <!--end col-->

                                <div class="col-md-7">
                                    <div class="card-body customer-testi">
                                        <h6 class="text-primary font-weight-bold">{{$testimony->name}}<small
                                                class="text-muted d-block">{{$testimony->position}}</small></h6>
                                        <ul class="mb-0 list-unstyled">
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                            </li>
                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i>
                                            </li>
                                        </ul>
                                        <p class="mb-0 text-muted h6 font-italic">"{{$testimony->what_is_said}}"</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!-- Review End -->
                        @endforeach

                        <!-- Review Start -->

                    </div>
                    <!-- Review End -->
                </div>
                <!--end owl-fade-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!--End Testimonial Section  -->

    <!-- Sign up Section Start -->
    <section class="overflow-hidden section mt-60 bg-soft-primary">
        <div class="container">
            <div class="p-4 roundedd bg-primary p-lg-5">
                <div class="row align-items-end">
                    <div class="col-md-8">
                        <div class="text-center section-title text-md-left">
                            <h4 class="mb-3 text-white title title-dark">{{$content->getContent('Mnag31','title')}}</h4>
                            <p class="mb-0 text-white">{{$content->getContent('Mnag31','description')}}</p>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="mt-4 col-md-4 mt-sm-0">
                        <div class="text-center text-md-right">
                            <a href="{{url('/register')}}" class="pt-3 pb-3 pl-4 pr-4 btn btn-light">Create Free
                                Account</a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
        </div>
        <!--end container-->
    </section>
    <!-- End Sign up Section  -->


    
@endsection

@section('scripts')
@parent

@endsection