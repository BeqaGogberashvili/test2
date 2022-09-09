<x-layout>

        <x-setting heading="Add Quote:">
            <form action="/quotes" method="POST" enctype="multipart/form-data" class="mx-60">
                @csrf
                <x-form.input name="title_en" />
                <x-form.input name="title_ka" />
                <x-form.input name="thumbnail" type="file" required />
                <label class="block mb-2 uppercase font-bold text-xs" for="movies">{{__('text.movies')}}</label>
                
                <select name="movie_id" id="movie_id" class="mb-14 border border-[#292828] w-full rounded-sm outline-0 px-4 py-2" style="background: #474646">
    
                    @php
                        $movies = \App\Models\Movie::all();
                    @endphp
                
                    @foreach ($movies as $movie)
                        <option value="{{ $movie->id }}" {{ old('movie_id') == $movie->id ? 'selected' : '' }}>{{ ucwords($movie->title) }}</option>
                    @endforeach
                
                </select>
    
                <x-form.button>{{__('text.submit')}}</x-form.button>
            </form>
        </x-setting>

</x-layout>