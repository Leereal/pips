@component('mail::message')
# Hello Admin

This is to inform you of a successfull Deposit that just occured on your system. the proof of payment is attached with this mail, please login to review this changes.

@component('mail::button', ['url' => "{{ config('app.url') }}"])
Login Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
