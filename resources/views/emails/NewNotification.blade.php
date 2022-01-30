@component('mail::message')
# Greetings!

{!! $demo->message !!}<br>

@if ($demo->otpcode)
  <h3>{{$demo->otpcode}}</h3>  
@endif

<br>
Kind regards,<br>
{{ $demo->sender }}.
@endcomponent
