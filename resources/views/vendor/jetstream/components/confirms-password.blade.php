@props(['title' => __('Confirm Password'), 'content' => __('For your security, please confirm your password to continue.'), 'button' => __('Confirm')])

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

    $confirmableId = md5($attributes->wire('then'));
@endphp

<span
    {{ $attributes->wire('then') }}
    x-data
    x-ref="span"
    x-on:click="$wire.startConfirmingPassword('{{ $confirmableId }}')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === '{{ $confirmableId }}' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);"
>
    {{ $slot }}
</span>

@once
<x-jet-dialog-modal wire:model="confirmingPassword">
    <x-slot name="title">
       <h3 class="text-{{$text}}">{{ $title }}</h3> 
    </x-slot>

    <x-slot name="content">
        <p class="text-{{$text}}"> {{ $content }}</p>
       
        <div class="mt-4 border-none" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
            <x-jet-input type="password" class="form-control bg-{{$bg}} text-{{$text}}" placeholder="{{ __('Password') }}"
                        x-ref="confirmable_password"
                        wire:model.defer="confirmablePassword"
                        wire:keydown.enter="confirmPassword" />

            <x-jet-input-error for="confirmable_password" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-jet-secondary-button>

        <x-jet-button class="ml-2" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
            {{ $button }}
        </x-jet-button>
    </x-slot>
</x-jet-dialog-modal>
@endonce
