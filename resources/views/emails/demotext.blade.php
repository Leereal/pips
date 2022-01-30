@component('mail::message')

# Welcome to {{ $demo->sender }}!
Your registration is successful and we are really excited to welcome you to {{ $demo->sender }} community! <br>

<p style="font-size:12px">Your system generated password: <strong>{{ $demo->password }}</strong></p><br>
<p style="font-size:12px">Please do well to change this password to your prefered one.</p><br>

If you need any help, do not hesitate to reach out to us at <br> {{ $demo->contact_email }} <br><br>

Kind regards,<br>
{{ $demo->sender }}.
@endcomponent


