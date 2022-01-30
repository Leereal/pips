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
					<div class="mt-2 mb-3 d-inline">
						<h1 class="title1 text-{{$text}} d-inline mr-4">App Settings</h1>
						<a href="{{ route('clearcache') }}" class=" btn btn-sm btn-warning text-canter">
							Clear Cache
						</a>
					</div>
					
					<x-danger-alert/>
                    <x-success-alert/>
					@if(count($errors) > 0)
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger alert-dismissable" role="alert" >
                                <button type="button" clsass="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                @foreach ($errors->all() as $error)
                                <i class="fa fa-warning"></i> {{ $error }}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
					<div class="mt-2 mb-5 row">
						<div class="col-12">
                            <div class="card p-md-5 p-2 shadow-lg bg-{{$bg}}">
								<ul class="nav nav-pills">
									<li class="nav-item">
										<a href="#info" class="nav-link active" data-toggle="tab">Website Information</a>
									</li>
									<li class="nav-item">
										<a href="#pref" class="nav-link" data-toggle="tab">Preference</a>
									</li>
									<li class="nav-item">
										<a href="#email" class="nav-link" data-toggle="tab">Email/Google Login-Captcha</a>
									</li>
									{{-- <li class="nav-item">
										<a href="#social" class="nav-link" data-toggle="tab">Google Login</a>
									</li> --}}
								</ul>
                                <div class="tab-content">
									<div class="tab-pane fade show active" id="info">
										@include('admin.Settings.AppSettings.webinfo')
									</div>
									<div class="tab-pane fade" id="pref">
										@include('admin.Settings.AppSettings.webpreference')
									</div>
									<div class="tab-pane fade" id="email">
										@include('admin.Settings.AppSettings.email')
									</div>
									<div class="tab-pane fade" id="social">
										@include('admin.Settings.AppSettings.social')
									</div>
								</div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
<script>
	$('.select2').select2();
	
	// $('#appinfoform').on('submit', function() {
	// 	// alert('love');
	// 	$.ajax({
	// 		url: "{{route('updatewebinfo')}}",
	// 		type: 'POST',
	// 		data: $('#appinfoform').serialize(),
	// 		success: function(response) {
	// 			if (response.status === 200) {
	// 				$.notify({
	// 					// options
	// 					icon: 'flaticon-alarm-1',
	// 					title: 'Success',
	// 					message: response.success,
	// 				},{
	// 					// settings
	// 					type: 'success',
	// 					allow_dismiss: true,
	// 					newest_on_top: false,
	// 					placement: {
	// 						from: "top",
	// 						align: "right"
	// 					},
	// 					offset: 20,
	// 					spacing: 10,
	// 					z_index: 1031,
	// 					delay: 5000,
	// 					timer: 1000,
	// 					animate: {
	// 						enter: 'animated fadeInDown',
	// 						exit: 'animated fadeOutUp'
	// 					},
	
	// 				});
	// 			} else {
					
	// 			}
	// 		},
	// 		error: function(error) {
	// 			console.log(error);
	// 			//let errors = error.responseJSON;
	// 			$.notify({
	// 					// options
	// 					icon: 'flaticon-alarm-1',
	// 					title: 'Error',
	// 					message: error,
	// 				},{
	// 					// settings
	// 					type: 'danger',
	// 					allow_dismiss: true,
	// 					newest_on_top: false,
	// 					placement: {
	// 						from: "top",
	// 						align: "right"
	// 					},
	// 					offset: 20,
	// 					spacing: 10,
	// 					z_index: 1031,
	// 					delay: 5000,
	// 					timer: 1000,
	// 					animate: {
	// 						enter: 'animated fadeInDown',
	// 						exit: 'animated fadeOutUp'
	// 					},
	
	// 				});
	// 		},
	
	// 	});
	// });
	
	function changecurr(){
		var e = document.getElementById("select_c");
		var selected = e.options[e.selectedIndex].id;
		document.getElementById("s_c").value = selected;
		console.log(selected);
	}

	$('#updatepreference').on('submit', function() {
		//alert('love');
		$.ajax({
			url: "{{route('updatepreference')}}",
			type: 'POST',
			data: $('#updatepreference').serialize(),
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

	let sendmail = document.querySelector('#sendmailserver');
    let smtp = document.querySelector('#smtpserver');
    let smtptext = document.querySelectorAll('.smtp');
    //console.log(sendmail);
    sendmail.addEventListener('click', sortform);
    smtp.addEventListener('click', sortform);
    
	if (smtp.checked) {
		smtptext.forEach(smtps => {
			smtps.classList.remove('d-none');
			smtps.setAttribute('required','');
		});
	} 
    function sortform(){
        if (sendmail.checked) {
            smtptext.forEach(element => {
                element.classList.add('d-none');
                element.removeAttribute('required','');
            });
        }
        if (smtp.checked) {
            smtptext.forEach(smtps => {
                smtps.classList.remove('d-none');
                smtps.setAttribute('required','');
            });
        }  
    }

	// Submit email preference form
	$('#emailform').on('submit', function() {
		//alert('love');
		$.ajax({
			url: "{{route('updateemailpreference')}}",
			type: 'POST',
			data: $('#emailform').serialize(),
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
	