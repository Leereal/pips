@component('mail::message')
# Hello Admin

This is to inform you of a successfull KYC Document Upload that just occured on your system. the uploaded document is attached with this mail, please login to review this changes.

@component('mail::button', ['url' => "{{ config('app.url') }}"])
Login Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
