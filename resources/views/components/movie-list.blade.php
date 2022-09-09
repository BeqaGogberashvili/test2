<x-layout>
    <x-setting>
    <div>
        <div class="min-h-[360px]">
        @if ($movies->count())
        <table class="w-full">
            <tr class="font-semibold text-xl ">
                <td class="pb-10">{{__('text.movies')}}:</td>
            </tr>

            @foreach ($movies as $movie)
            <tr class=" border-b border-[#3C3B3B] hover:bg-[#333232]">
                <td class="py-4 pl-2 pr-[400px]"><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></td>
                <td>
                    <a href="/movies/{{ $movie->id }}/edit">{{__('text.edit')}}</a>
                </td>
                <td>
                    <form action="/movies/{{ $movie->id }}" class="ml-20" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>{{__('text.delete')}}</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </table>

        @else
            <h1 class="flex justify-center">{{__('text.no_movies')}}</h1>
        @endif
    </div>
    <div class="pt-4 px-12 mt-12 text-white-500">
        {{ $movies->links() }}
    </div>
    </div>
    </x-setting>
</x-layout>