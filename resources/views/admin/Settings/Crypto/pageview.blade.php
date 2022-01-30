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
						<h1 class="title1 text-{{$text}}">Crypto Assets/Exchnage Settings</h1>
					</div>
					<x-danger-alert/>
                    <x-success-alert/>
                    <div class="mb-5 row">
                        <div class="col-md-12">
                            <div class="card p-3 p-md-5 shadow-lg bg-{{$bg}}">
                                <div class="row">
                                    <div class="form-group col-12 d-inline">
                                        <h5 class="text-{{$text}}">Use this Feature</h5>
                                        <div class="selectgroup">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="crypto" id="cryptoyes" value="true" class="selectgroup-input" checked="">
                                                <span class="selectgroup-button">On</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="crypto" id="cryptono" value="false" class="selectgroup-input">
                                                <span class="selectgroup-button">Off</span>
                                            </label>
                                        </div>
                                        <div>
                                            <small class="text-{{$text}}">Your users will not be able to see/use this service if turned off</small> 
                                        </div>
                                        @if($moresettings->use_crypto_feature=='true')
                                        <script>document.getElementById("cryptoyes").checked= true;</script>
                                        @else
                                        <script>document.getElementById("cryptono").checked= true;</script>
                                        @endif
                                    </div>
                                    <div class="col-md-6 offset-md-3">
                                        
                                        <form action="{{route('exchangefee')}}" method="post" class=" form-inline">
                                            @csrf
                                            <div class=" form-group">
                                                <h5 class="text-{{$text}}">Exchange Fee &nbsp;</h5>
                                                <input type="text" name="fee" value="{{$moresettings->fee}}" class="text-{{$text}} form-control bg-{{$bg}}" id="">
                                            </div>
                                            <div class=" form-group">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="mt-3 col-12">
                                        <div class=" table-responsive">
                                            <table class="table table-hover text-{{$text}}">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Asset Name</th>
                                                        <th scope="col">Asset Symbol</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @include('admin.Settings.Crypto.assets')
                                                </tbody>
                                            </table>
                                        </div>
                                        <div>
                                            <small class="text-{{$text}}">Be sure that non of your users have balances greater than 0 in thier asset account before you disable the asset.</small> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
            <script>
                

            $('#cryptoyes').on('click', function() {
                // let truevalue = $('#cryptoyes').val()
                let uurl = "{{url('admin/dashboard/useexchange')}}"  + '/' + 'true';
                $.ajax({
                    url: uurl,
                    type: 'GET',
                    
                    success: function(response) {
                        if (response.status === 200) {
                            $.notify({
                                // options
                                icon: 'flaticon-alarm-1',
                                title: 'Success',
                                message: response.success,
                            },{
                                // settings
                                type: 'success',
                                allow_dismiss: true,
                                newest_on_top: false,
                                placement: {
                                    from: "top",
                                    align: "right"
                                },
                                offset: 20,
                                spacing: 10,
                                z_index: 1031,
                                delay: 5000,
                                timer: 1000,
                                animate: {
                                    enter: 'animated fadeInDown',
                                    exit: 'animated fadeOutUp'
                                },
            
                            });
                        } else {
                            
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    },
                });
            });

            $('#cryptono').on('click', function() {
                // let truevalue = $('#cryptoyes').val()
                let uurl = "{{url('admin/dashboard/useexchange')}}"  + '/' + 'false';
                $.ajax({
                    url: uurl,
                    type: 'GET',
                    
                    success: function(response) {
                        if (response.status === 200) {
                            $.notify({
                                // options
                                icon: 'flaticon-alarm-1',
                                title: 'Success',
                                message: response.success,
                            },{
                                // settings
                                type: 'success',
                                allow_dismiss: true,
                                newest_on_top: false,
                                placement: {
                                    from: "top",
                                    align: "right"
                                },
                                offset: 20,
                                spacing: 10,
                                z_index: 1031,
                                delay: 5000,
                                timer: 1000,
                                animate: {
                                    enter: 'animated fadeInDown',
                                    exit: 'animated fadeOutUp'
                                },
            
                            });
                        } else {
                            
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    },
                });
            });
        </script>
    @endsection