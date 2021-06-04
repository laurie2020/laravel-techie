<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chiffres') }}
        </h2>
        
    </x-slot>

    

    <p class="text-3xl underline"><a href="/chiffre">< Back</a></p>
    <section class="mt-24">
        <h1 class="text-5xl text-center mb-24">{{ $chiffre->titre }}</h1>
        <h2 class="text-9xl text-center text-indigo-600">{{ $chiffre->nombre }}</h2>
    </section>
    
    
</x-app-layout>

