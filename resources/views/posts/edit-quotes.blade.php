<x-layout>
    
        <x-setting>
            <form action="/quotes/{{ $quote->id }}" method="POST" enctype="multipart/form-data" class="m-10">
                @csrf
                @method('PATCH')

                <x-form.input name="title_en" value="{{ $quote->getTranslation('quote', 'en') }}" />
                <x-form.input name="title_ka" value="{{ $quote->getTranslation('quote', 'ka') }}" />
                <img src="{{ asset('storage/' . $quote->thumbnail) }}" class="w-full h-[300px] object-cover">
                <x-form.input name="thumbnail" type="file" value="{{ $quote->thumbnail }}" />
                <label class="block mb-2 uppercase font-bold text-xs" for="movies">{{__('text.movies')}}</label>
    
                <select name="movie_id" id="movie_id" class="mb-14 border border-[#292828] w-full rounded-sm outline-0 px-4 py-2" style="background: #474646">
    
                    @php
                        $movies = \App\Models\Movie::all();
                    @endphp
                
                    @foreach ($movies as $movie)
                        <option 
                            value="{{ $movie->id }}" 
                            {{ old('movie_id', $quote->movie_id) == $movie->id ? 'selected' : '' }}>
                            {{ ucwords($movie->title) }}
                        </option>
                    @endforeach
                
                </select>
    
                <x-form.button>{{__('text.edit')}}</x-form.button>
            </form>
        </x-setting>

</x-layout>