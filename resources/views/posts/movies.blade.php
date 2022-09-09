<x-layout>

    <main class="flex flex-col items-center justify-center mt-[79px]">
    
        <div class="mb-[67px] ">

            <h1 class="w-full text-[48px]">{{ $name }}</h1>

            @foreach ($movies as $movie)

            <img src="{{ asset('storage/' . $movie->thumbnail) }}" alt="{{ $movie->quote }}" style="object-fit: cover; width: 748px; height: 414px;" class="mt-[82px] rounded-lg rounded-b-none shadow-2xl border border-black">

            <div class="h-[119px] bg-white rounded-lg rounded-t-none flex items-center justify-center shadow-2xl border border-black">
                <h1 class="text-[48px] text-black">"{{ $movie->quote }}"</h1>
            </div>
            
            @endforeach

        </div>

    </main>
    
</x-layout>

