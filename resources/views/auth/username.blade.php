@extends('layouts.guest')

@section('title', 'Create Username')

@section('styles')
@parent

@endsection

@section('content')
<section class=" auth">
        <div class="container">
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
                   
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
                            <h4 class="text-center card-title">Choose a Username</h4>
                            <form method="POST" action="{{ route('addusername') }}"  class="mt-4 login-form">
                                 @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Username <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="pl-5 form-control" name="username" placeholder="Enter Unique Username" required>
                                            </div>
                                            @if ($errors->has('username'))
                                            <small class="text-danger">{{ $errors->first('username') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="mb-0 col-lg-12">
                                        <button class="btn btn-primary btn-block pad" type="submit">Complete</button>
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