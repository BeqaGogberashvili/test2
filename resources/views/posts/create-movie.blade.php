<x-layout>

    <x-setting heading="Add Movie:">
        <form action="/movies/create" method="POST" enctype="multipart/form-data" class="mx-60 my-20">
            @csrf
            <x-form.input name="title_en" />
            <x-form.input name="title_ka" />
            <x-form.button>{{__('text.submit')}}</x-form.button>
        </form>
    </x-setting>

</x-layout>