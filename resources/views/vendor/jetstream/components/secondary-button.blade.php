<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center btn btn-secondary px-4 py-2 border']) }}>
    {{ $slot }}
</button>
