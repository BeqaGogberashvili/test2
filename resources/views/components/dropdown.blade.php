@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false" class="relative">

    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    <div x-show="show" class="py-2 absolute bg-[#292929] mt-2 z-50 w-full rounded-sm overflow-auto max-h-52" style="display: none;">
        {{ $slot }}
    </div>
</div>