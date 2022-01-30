@php
if (Auth::user()->dashboard_style == "light") {
		$bgmenu="blue";
    $bg="light";
    $text = "dark";
} else {
    $bgmenu="dark";
    $bg="dark";
    $text = "light";
}	
@endphp
	
@extends('layouts.app')
    @section('content')
        @include('user.topmenu')
        @include('user.sidebar')
        <div class="main-panel bg-{{$bg}}">
			<div class="content bg-{{$bg}}">
				<div class="page-inner">
					<div class="mt-2 mb-4">
						<h1 class="title1 text-{{$text}}">{{ __('Security/Account Deletion') }}</h1>
					</div>
					<x-danger-alert/>
					<x-success-alert/>
					{{-- <div class="row">
						<div class="col-md-8  col-offset-md-2 bg-{{$bg}} p-3">
							@if (Laravel\Fortify\Features::canUpdateProfileInformation())
								@livewire('profile.update-profile-information-form')
								<x-jet-section-border />
							@endif
                        </div>
					</div> --}}
					<div class="row">
						<div class="col-md-8  col-offset-md-2 bg-{{$bg}} p-md-3 p-2">
                            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                <div>
                                    @livewire('profile.two-factor-authentication-form')
                                </div>
                            @endif
                        </div>
					</div>
					<div class="row">
						<div class="col-md-8  col-offset-md-2 bg-{{$bg}} p-3">
							<div class="mt-5">
								@livewire('profile.logout-other-browser-sessions-form')
							</div>
				
							@if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
								<x-jet-section-border />
				
								<div class="mt-5">
									@livewire('profile.delete-user-form')
								</div>
							@endif
                        </div>
					</div>
				</div>	
			</div>
	@endsection