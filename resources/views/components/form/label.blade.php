@props(['name'])

<label class="block mb-2 uppercase font-bold text-xs" for="{{ $name }}">
    {{ ucwords($name) }}
</label>