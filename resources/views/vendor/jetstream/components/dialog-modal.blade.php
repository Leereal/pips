@props(['id' => null, 'maxWidth' => null])
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
<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="bg-{{$bg}}" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content bg-{{$bg}}">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $title }}</h5>
                </div>
                <div class="modal-body">
                    {{ $content }}
                </div>
                <div class="modal-footer">
                    {{ $footer }}
                </div>
            </div>
        </div>
    </div>
</x-jet-modal>
