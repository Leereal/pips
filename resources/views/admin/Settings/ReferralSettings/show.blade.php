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
						<h1 class="title1 text-{{$text}}">Referral/Other Bonus Settings</h1>
					</div>
					<x-danger-alert/>
                    <x-success-alert/>

					<div class="row">
						<div class="col-md-8 offset-md-2">
							<form method="post" action="javascript:void(0)" id="refform">
								@csrf
								@method('PUT')
								<div class="form-group">
									<h5 class="text-{{$text}}">Direct Referral Commission (%) </h5>
									<input type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission" value="{{$settings->referral_commission}}" required>
								</div>
							
								<div class="form-group">
									<h5 class="text-{{$text}}">Indirect Referral Commission 1 (%) </h5>
									<input type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission1" value="{{$settings->referral_commission1}}" required>
								</div>
							
								<div class="form-group">
									<h5 class="text-{{$text}}">Indirect Referral Commission 2 (%) </h5>
									<input type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission2" value="{{$settings->referral_commission2}}" required>
								</div>
							
								<div class="form-group">
									<h5 class="text-{{$text}}">Indirect Referral Commission 3 (%) </h5>
									<input type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission3" value="{{$settings->referral_commission3}}" required>
								</div>
							
								<div class="form-group">
									<h5 class="text-{{$text}}">Indirect Referral Commission 4 (%) </h5>
									<input type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission4" value="{{$settings->referral_commission4}}" required>
								</div>
							
								<div class="form-group">
									<h5 class="text-{{$text}}">Indirect Referral Commission 5 (%) </h5>
									<input type="text" class="form-control  bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission5" value="{{$settings->referral_commission5}}" required>
								</div>
							
								<div class="form-group">
									<h5 class="text-{{$text}}">Registration Bonus({{$settings->currency}})</h5>
									<input type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="signup_bonus" value="{{$settings->signup_bonus}}" required>
								</div>
								<div class="form-group">
									<input type="submit" class="px-5 btn btn-primary btn-lg" value="Update">
									<input type="hidden" name="id" value="1">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
<script>
	// Submit email preference form
	$('#refform').on('submit', function() {
		//alert('love');
		$.ajax({
			url: "{{route('updaterefbonus')}}",
			type: 'POST',
			data: $('#refform').serialize(),
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