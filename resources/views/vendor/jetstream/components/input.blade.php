@props(['disabled' => false])
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
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border form-control bg-{{$bg}} text-{{$text}} rounded shadow']) !!}>
