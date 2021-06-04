<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Chiffres') }}
        </h2>
        
    </x-slot>

    
    <section class="container w-25 mt-10">
        <h1 class='text-5xl text-center'>Create Chiffre</h1>
        <ul class="bg-red-400 rounded w-11/12 mx-auto">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
        @if ($errors->any())
            <div class="w-3/4 bg-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        <form action="{{ route('chiffre.store') }}" method="post" class="w-3/4 mx-auto">
            @csrf
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Nombre : </label>
                <input type="number" class="rounded" name="nombre">
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Titre : </label>
                <input type="text" class="rounded" name="titre">
            </div>
    
            <button type="submit" class="w-full bg-green-300 p-2 mt-10 rounded">Submit</button>
        </form>
    </section>
</x-app-layout>


