<x-layout>
    <section class="px-6 py-8">
        <main class="flex flex-col items-center justify-center mt-[79px]">
            <div class="shadow-2xl p-12 rounded-xl" style="background-color: #292929">
            
                <h1 class="text-2xl py-4">{{__('text.auth')}}:</h1>
        
                <form action="/login" method="POST" enctype="multipart/form-data" class="p-4">
                    @csrf

                    <x-form.input name="email" />
                    <x-form.input name="password" type="password" header="{{__('text.password')}}"/>
        
                    <x-form.button>{{__('text.login')}}</x-form.button>
                </form>
        
                </div>
        </main>
    </section>
</x-layout>