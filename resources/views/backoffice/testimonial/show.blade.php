<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Testimonials') }}
        </h2>
        
    </x-slot>

    

    <p class="text-3xl underline"><a href="/testimonial">< Back</a></p>
    <section class="mt-24 w-3/4 mx-auto">
        <h1 class="text-2xl text-center">"{{ $testimonial->texte }}"</h1>
        <h2 class="text-xl text-center text-gray-500">- {{ $testimonial->personne->nom }} {{ $testimonial->personne->prenom }}</h2>
    </section>
    
    
</x-app-layout>