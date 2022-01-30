@extends('layouts.base')

@section('title', 'Frequently asked questions')

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
                        <h4 class="title">{{$content->getContent('wuZlis','title')}} </h4>

                        <div class="pt-2 mt-4 subcribe-form">

                        </div>

                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="mb-0 bg-white rounded shadow breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">{{ $settings->site_name }}</a>
                                    </li>

                                    <li class="breadcrumb-item active" aria-current="page">Faq</li>
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

    <!-- Start Section -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pb-2 mb-4 text-center section-title">
                        <h4 class="mb-4">{{$content->getContent('1TYkw0','title')}}</h4>
                        <p class="mx-auto para-desc text-muted">{{$content->getContent('1TYkw0','description')}}</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="pt-2 mt-4 col-lg-4 col-md-6 col-12">
                    <div class="text-center bg-white border-0 rounded card explore-feature">
                        <div class="card-body">
                            <div class="mb-2 shadow-lg icon rounded-circle d-inline-block h2">
                                <i class="uil uil-question-circle"></i>
                            </div>
                            <div class="mt-3 content">
                                <a href="{{url('/faq')}}" class="title h5 text-dark">{{$content->getContent('rK6Yhn','title')}}</a>
                                <p class="mt-3 mb-0 text-muted">{{$content->getContent('rK6Yhn','description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-4 col-md-6 col-12">
                    <div class="text-center bg-white border-0 rounded card explore-feature">
                        <div class="card-body">
                            <div class="mb-2 shadow-lg icon rounded-circle d-inline-block h2">
                                <i class="uil uil-file-bookmark-alt"></i>
                            </div>
                            <div class="mt-3 content">
                                <a href="{{url('/login')}}" class="title h5 text-dark">{{$content->getContent('HBHBLo','title')}}</a>
                                <p class="mt-3 mb-0 text-muted">{{$content->getContent('HBHBLo','description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="pt-2 mt-4 col-lg-4 col-md-6 col-12">
                    <div class="text-center bg-white border-0 rounded card explore-feature">
                        <div class="card-body">
                            <div class="mb-2 shadow-lg icon rounded-circle d-inline-block h2">
                                <i class="uil uil-cog"></i>
                            </div>
                            <div class="mt-3 content">
                                <a href="{{url('/contact')}}" class="title h5 text-dark">{{$content->getContent('rCTDQh','title')}}</a>
                                <p class="mt-3 mb-0 text-muted">{{$content->getContent('rCTDQh','description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pb-2 mb-4 text-center section-title">
                        <h4 class="mb-4">{{$content->getContent('kMsswR','title')}}</h4>
                        <p class="mx-auto para-desc text-muted">{{$content->getContent('kMsswR','description')}}</p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

            <div class="row justify-content-center">
                <div class="pt-2 mt-4 col-lg-9">
                    <div class="faq-content">
                        <div class="accordion" id="accordionExample">
                            @foreach ($faqs as $item)
                            <div class="mb-2 border-0 rounded card">
                                <a data-toggle="collapse" href="#collapse{{$item->id}}" class="faq position-relative"
                                    aria-expanded="true" aria-controls="collapse{{$item->id}}">
                                    <div class="p-3 border-0 shadow card-header bg-light" id="heading{{$item->id}}">
                                        <h6 class="mb-0 title">{{$item->question}}</h6>
                                    </div>
                                </a>
                                <div id="collapse{{$item->id}}" class="collapse show" aria-labelledby="heading{{$item->id}}"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="mb-0 text-muted faq-ans"> {{$item->answer}} </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="p-4 rounded shadow media align-items-center features feature-clean">
                        <div class="text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-envelope-check d-block h3"></i>
                        </div>
                        <div class="ml-4 content">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">{{$content->getContent('EOUU7R','title')}}</a></h5>
                            <p class="mb-0 text-muted">{{$content->getContent('EOUU7R','description')}}</p>
                            <div class="mt-2">
                                <a href="{{url('/contact')}}" class="btn btn-sm btn-soft-primary">Submit a Request</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

                {{-- <div class="pt-2 mt-4 col-lg-6 col-md-6 col-12 mt-sm-0 pt-sm-0">
                    <div class="p-4 rounded shadow media align-items-center features feature-clean">
                        <div class="text-center icons text-primary">
                            <i class="mb-0 rounded uil uil-webcam d-block h3"></i>
                        </div>
                        <div class="ml-4 content">
                            <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Start a
                                    Meeting</a></h5>
                            <p class="mb-0 text-muted">This is required when, for text is not yet available.</p>
                            <div class="mt-2">
                                <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Start Live Chat</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section -->


    
@endsection

@section('scripts')
@parent

@endsection