<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
        
    </x-slot>

    
    <section class="container w-25 mt-10">
        <h1 class='text-5xl text-center'>Edit About</h1>
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
    
        <form action="/about/{{ $about->id }}" method="post" class="w-3/4 mx-auto" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Titre : </label>
                <input type="text" class="rounded" name="titre" value="{{ $about->titre }}">
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Description : </label>
                <input type="text" class="rounded" name="description" value="{{ $about->description }}">
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Paragraphe 1 : </label>
                <textarea name="paragraphe1" id="" cols="20" rows="10" class="rounded">{{ $about->paragraphe1 }}</textarea>
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Paragraphe 2 : </label>
                <textarea name="paragraphe2" id="" cols="20" rows="10" class="rounded">{{ $about->paragraphe2 }}</textarea>
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Paragraphe 3 : </label>
                <textarea name="paragraphe3" id="" cols="20" rows="10" class="rounded">{{ $about->paragraphe3 }}</textarea>
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Image : </label>
                <input type="file" class="rounded" name="image">
            </div>
            <button type="submit" class="w-full bg-green-300 p-2 mt-10 rounded">Submit</button>
        </form>
    </section>
</x-app-layout>