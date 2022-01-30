@component('mail::message')
# Hello {{ $demo->receiver_name }},

This is a notification of a new return on investment (ROI) on your investment account. 
<br>

<strong>Plan: </strong> {{ $demo->receiver_plan }} <br>
<strong>Amount: </strong> {{ $demo->received_amount }} <br>
<strong>Date: </strong> {{ $demo->date }} <br>

Thanks,<br>
{{ $demo->sender }}.
@endcomponent
