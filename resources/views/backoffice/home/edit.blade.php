<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
        
    </x-slot>

    
    <section class="container w-25 mt-10">
        <h1 class='text-5xl text-center'>Edit Home</h1>
        <ul class="bg-red-400 rounded w-11/12 mx-auto">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    
        <form action="/home/{{ $home->id }}" method="post" class="w-3/4 mx-auto" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Titre : </label>
                <input type="text" class="rounded" name="titre" value="{{ $home->titre }}">
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Description : </label>
                <textarea name="description" id="" cols="20" rows="10" class="rounded">{{ $home->description }}</textarea>
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Image : </label>
                <input type="file" class="rounded" name="image">
            </div>
            <button type="submit" class="w-full bg-green-300 p-2 mt-10 rounded">Submit</button>
        </form>
    </section>
</x-app-layout>