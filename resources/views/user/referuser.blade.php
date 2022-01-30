<?php
	if (Auth::user()->dashboard_style == "light") {
		$bgmenu="blue";
    $bg="light";
    $text = "dark";
} else {
    $bgmenu="dark";
    $bg="dark";
    $text = "light";

}
?> 
@extends('layouts.app')
    @section('content')
        @include('user.topmenu')
        @include('user.sidebar')
        @inject('uc', 'App\Http\Controllers\User\UsersController')
        <?php
            $array = \App\Models\User::all();
            $usr = Auth::user()->id;
        ?>
        <div class="main-panel bg-{{$bg}}">
            <div class="content bg-{{$bg}}">
                <div class="page-inner">
                    <div class="mt-2 mb-4">
                        <h1 class="title1 text-{{$text}}">Refer users to {{$settings->site_name}} community</h1>
                    </div>
                    <x-danger-alert/>
					<x-success-alert/>
                    
                    <div class="row">
                        <div class="col-md-12 text-center card bg-{{$bg}} shadow-lg p-3 text-{{$text}}">
                            <div class="p-4 row">
                                <div class="col-md-8 offset-md-2">
                                    <strong>You can refer users by sharing your referral link:</strong><br>
                                    <div class="mb-3 input-group">
                                        <input type="text" class="form-control myInput readonly text-{{$text}} bg-{{$bg}}" value="{{Auth::user()->ref_link}}" id="myInput" readonly>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2"><i class="fas fa-copy"></i></button>
                                        </div>
                                    </div>
    
                                    <strong>or your Referral ID</strong><br>
                                    <h4 style="color:green;"> {{Auth::user()->username}}</h4> <br>
                                    <h3 class="title1">
                                        <small>You were referred by</small><br>
                                        <i class="fa fa-user fa-2x"></i><br>
                                        <small>{{$uc->getUserParent($usr)}}</small>
                                    </h3>
                                </div>
                                <div class="mt-4 col-md-12">
                                    <h2 class="title1 text-{{$text}} text-left">Your Referrals.</h2>
                                    <div class="table-responsive"> 
                                        <table class="table UserTable table-hover text-{{$text}}"> 
                                            <thead> 
                                                <tr> 
                                                    <th>Client name</th>
                                                    <th>Ref. level</th>
                                                    <th>Parent</th>
                                                    <th>Client status</th>
                                                    <th>Date registered</th>
                                                </tr>
                                            </thead> 
                                            <tbody> 
                                                {!! $uc->getdownlines($array,$usr) !!}
                                            </tbody> 
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
				function myFunction() {
					/* Get the text field */
					var copyText = document.getElementById("myInput");
					/* Select the text field */
					copyText.select();
					copyText.setSelectionRange(0, 99999); /* For mobile devices */
					/* Copy the text inside the text field */
					document.execCommand("copy");
					/* Alert the copied text */
					//alert("Copied the text: " + copyText.value);
					swal("Copied", copyText.value, "success");
					}
			</script>
    @endsection