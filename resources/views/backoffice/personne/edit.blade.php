<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Personnes') }}
        </h2>
        
    </x-slot>

    
    <section class="container w-25 mt-10">
        <h1 class='text-5xl text-center'>Edit Personne</h1>
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
    
        <form action="/personne/{{ $personne->id }}" method="post" class="w-3/4 mx-auto" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Nom : </label>
                <input type="text" class="rounded" name="nom" value="{{ $personne->nom }}">
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Prénom : </label>
                <input type="text" class="rounded" name="prenom" value="{{ $personne->prenom }}">
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Photo : </label>
                <input type="file" class="rounded" name="photo">
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Profession : </label>
                <input type="text" class="rounded" name="profession" value="{{ $personne->profession }}">
            </div>
            <button type="submit" class="w-full bg-green-300 p-2 mt-10 rounded">Submit</button>
        </form>
    </section>
</x-app-layout>