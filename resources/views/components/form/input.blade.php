@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{{__('text.'.$name)}}}" />
    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $name }}" 
        {{ $attributes(['value' => old($name)]) }}
        class="border border-[#292828] bg-[#474646] text-white p-2 outline-0 rounded-sm w-full"/>
    <x-form.error name="{{ $name }}" />
</x-form.field>