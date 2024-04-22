@props(['value'])

<label class="" {{ $attributes->merge(['class' => 'block font-medium text-sm']) }}>
    {{ $value ?? $slot }}
</label>
