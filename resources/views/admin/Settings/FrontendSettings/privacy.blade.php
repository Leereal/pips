<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
    $bg = 'light';
} else {
    $text = "light";
    $bg = 'dark';
}
?>
@extends('layouts.app')
@section('content')
@include('admin.topmenu')
@include('admin.sidebar')
<div class="main-panel bg-{{$bg}}">
    <div class="content bg-{{$bg}}">
        <div class="page-inner">
            <div class="mt-2 mb-4">
                <h1 class="title1 text-{{$text}}">Terms and Privacy Policy</h1>
            </div>
            <x-danger-alert/>
            <x-success-alert/>
            <div class="mb-5 row">
                <div class="col-md-12">
                    <div class="card p-1 p-md-5 shadow-lg bg-{{$bg}} text-{{$text}}">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <form method="post" action="{{route('savetermspolicy')}}">
                                    @csrf
                                    <div class="form-group">
                                        <h5 class="text-{{$text}}">Use Terms and Privacy Policy?</h5>
                                        <div class="selectgroup">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="terms" id="termsyes" value="yes" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">Yes</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="terms" id="termsno" value="no" class="selectgroup-input">
                                                <span class="selectgroup-button">No</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="ckeditor form-control bg-{{$bg}} text-{{$text}}" name="termsprivacy">
                                            {{$terms->description}}
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="px-5 btn btn-primary btn-lg" value="Save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($terms->useterms =='yes')
    <script>document.getElementById("termsyes").checked= true;</script>
    @else
    <script>document.getElementById("termsno").checked= true;</script>
    @endif
    @endsection
    @section('scripts')
        @parent
        <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
    @endsection