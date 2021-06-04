<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Testimonials') }}
        </h2>
        
    </x-slot>

    
    <section class="container w-25 mt-10">
        <h1 class='text-5xl text-center'>Create Testimonial</h1>
        <ul class="bg-red-400 rounded w-11/12 mx-auto">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    
        <form action="{{ route('chiffre.store') }}" method="post" class="w-3/4 mx-auto">
            @csrf
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Text : </label>
                <textarea name="texte" id="" cols="20" rows="10 rounded"></textarea>
            </div>
            <h2 class="text-3xl">Personne: </h2>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Nom : </label>
                <input type="text" class="rounded" name="nom">
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Prénom : </label>
                <input type="text" class="rounded" name="prenom">
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Photo : </label>
                <input type="file" class="rounded" name="photo">
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Profession : </label>
                <input type="text" class="rounded" name="profession">
            </div>
    
            <button type="submit" class="w-full bg-green-300 p-2 mt-10 rounded">Submit</button>
        </form>
    </section>
</x-app-layout>


