<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Personnes') }}
        </h2>
        
    </x-slot>

    <p class="text-3xl underline"><a href="/service">< Back</a></p>
    <section class="w-full mt-24 flex mx-auto justify-center">
        <i class="{{ $service->icone2 }} text-8xl"></i>
        <div class="flex flex-col mt-14">
            <h3 class="text-5xl">{{ $service->titre }}</h3>
            <h4 class="text-gray-400 text-lg">{{  $service->description }}</h4>
        </div>
    </section>
</x-app-layout>