<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Personnes') }}
        </h2>
        
    </x-slot>

    <p class="text-3xl underline"><a href="/personne">< Back</a></p>
    <section class="w-full mt-24 flex mx-auto justify-center">
        <img src="{{ asset("img/testimonials/" . $personne->photo) }}" alt="" width="250">
        <div class="flex flex-col mt-14">
            <h3 class="text-5xl">{{ $personne->nom }} {{ $personne->prenom }}</h3>
            <h4 class="text-gray-400">{{  $personne->profession }}</h4>
        </div>
    </section>
</x-app-layout>