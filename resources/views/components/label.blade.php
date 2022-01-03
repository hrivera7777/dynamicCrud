@props(['value'])

<label {{ $attributes->merge(['class' => 'text-sm']) }}>
    {{ $value ?? $slot }}
</label>
