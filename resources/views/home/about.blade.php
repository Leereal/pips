@extends('layouts.base')

@section('title', 'About Us')

@section('styles')
@parent

@endsection
@inject('content', 'App\Http\Controllers\FrontController')
@section('content')
<!-- Hero Start -->
    <section class="bg-half bg-light d-table w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-lg-12">
                    <div class="page-next-level">
                        <h4 class="title">{{$content->getContent('anvs8c','title')}}</h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="mb-0 bg-white rounded shadow breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">{{$settings->site_name}}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ul>
                            </nav>
                        </div>
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

    <!-- Shape Start -->
    <div class="position-relative">
        <div class="overflow-hidden text-white shape">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->

    <!-- About Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="pt-2 mt-4 col-lg-5 col-md-5 mt-sm-0 pt-sm-0">
                    <div class="position-relative">
                        <img src="{{asset('storage/app/public/photos/'.$content->getImage('iAwfKe','img_path'))}}" class="mx-auto rounded img-fluid d-block"
                            alt="">
                        <div class="play-icon">
                            <!-- <a href="http://vimeo.com/287684225" class="play-btn video-play-icon">
                                <i class="bg-white shadow mdi mdi-play text-primary rounded-circle"></i>
                            </a> -->
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-7 col-md-7 mt-sm-0 pt-sm-0">
                    <div class="section-title ml-lg-4">
                        <h4 class="mb-4 title">{{$content->getContent('epJ4LI','title')}}</h4>
                        <p class="text-muted">{{$content->getContent('epJ4LI','description')}}</p>
                        <a href="{{url('/login')}}" class="mt-3 btn btn-primary">Invest now<i
                                class="mdi mdi-chevron-right"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>


    <!-- About End -->

    <!-- Team Start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pb-2 mb-4 text-center section-title">
                        <h6 class="text-primary">{{$content->getContent('5hbB6X','title')}}</h6>
                        <h4 class="mb-4 title">{{$content->getContent('5hbB6X','description')}}</h4>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row">
                <div class="pt-2 mt-4 col-md-4">
                    <div
                        class="text-center bg-transparent border-0 card features feature-clean work-process process-arrow">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-user-check d-block h3"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">{{$content->getContent('Zrhm3I','title')}}</h5>
                            <p class="mb-0 text-muted">{{$content->getContent('Zrhm3I','description')}}</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-md-4 mt-md-5 pt-md-3">
                    <div
                        class="text-center bg-transparent border-0 card features feature-clean work-process process-arrow">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-transaction d-block h3"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">{{$content->getContent('yTKhlt','title')}}</h5>
                            <p class="mb-0 text-muted">{{$content->getContent('yTKhlt','description')}}</p>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-md-4 mt-md-5 pt-md-5">
                    <div
                        class="text-center bg-transparent border-0 card features feature-clean work-process d-none-arrow">
                        <div class="mx-auto text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-analysis d-block h3"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">{{$content->getContent('u0Ervr','title')}}</h5>
                            <p class="mb-0 text-muted">{{$content->getContent('u0Ervr','description')}}</p>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Team End -->

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