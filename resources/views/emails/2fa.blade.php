@component('mail::message')
#2FA code.

A temporary 2FA code request has been made using your account. <br>
Please authenticate using the following details:<br>
2FA code: <strong>{!! $demo->message !!}</strong> <br>

Thanks,<br>
{{ $demo->sender }}.
@endcomponent
