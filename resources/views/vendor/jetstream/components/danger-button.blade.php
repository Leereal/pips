<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-4 py-2 border border-transparent btn btn-danger btn-sm rounded font-semibold text-xs text-white uppercase active:bg-red-600 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
