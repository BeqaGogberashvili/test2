<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
</head>

<style>
    @font-face {

    font-family: Sansation;
    src: url('fonts/Sansation_Regular.ttf');
    }

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html{
        font-family: Sansation;
    }

    body{
        background: #3C3B3B;
        color: white;
    }

    a{
        color: white;
        text-decoration: under;
    }

    a:hover{
        text-decoration: underline
    }
    
    button:hover{
    text-decoration:underline;
    }
    
</style>
<body>

    <div class="absolute top-[473px] left-[54px] flex flex-col items-center">
        <div class="w-10 h-10 border-2 rounded-full flex items-center justify-center">
            <a href="/change-locale/en">en</a>
        </div>
        <div class="w-10 h-10 border-2 rounded-full flex items-center justify-center mt-2">
            <a href="/change-locale/ka">ka</a>
        </div>
        
    </div>

    <nav class="p-6">

        <div class="flex items-center justify-end mr-12">
        @auth
        <x-dropdown>

            <x-slot name="trigger">
                <button>
                    {{__('text.wellcome')}}, {{ auth()->user()->name }}!</button>
            </x-slot>

            <x-dropdown-item href="/">
                {{__('text.home')}}
            </x-dropdown-item>

            <x-dropdown-item href="/movie/list">
                {{__('text.movie_list')}}
            </x-dropdown-item>

            <x-dropdown-item href="/quote/list">
                {{__('text.quote_list')}}
            </x-dropdown-item>

            <x-dropdown-item href="/movies/create">
                {{__('text.add_movie')}}
            </x-dropdown-item>

            <x-dropdown-item href="/quotes/create">
                {{__('text.add_quote')}}
            </x-dropdown-item>

            <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">
                {{__('text.logout')}}
            </x-dropdown-item>

        </x-dropdown>
            

            <form action="/logout" id="logout-form" method="post" class="hidden">
                @csrf
            </form>

        @else
            <a href="/login" class="px-4">{{__('text.login')}}</a>
        @endauth
    </div>

    </nav>

    {{ $slot }}

</body>
</html>


