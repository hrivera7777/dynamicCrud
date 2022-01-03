<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-info my-2']) }}>
    {{ $slot }}
</button>
