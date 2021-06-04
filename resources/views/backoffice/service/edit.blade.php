<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <section class="w-25 mt-10">
        <h1 class='text-5xl text-center'>Edit Service</h1>
        <ul class="bg-red-400 rounded w-11/12 mx-auto">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    
        <form action="/service/{{ $service->id }}" method="post" class="w-3/4 mx-auto">
            @csrf
            @method("put")
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Nom : </label>
                <select name="icone2" id="">
                    <option value="bx bxl-dribbble">Dribble</option>
                    <option value="bx bx-file">File</option>
                    <option value="bx bx-tachometer">Tachometer</option>
                    <option value="bx bx-layer">Layer</option>
                    <option value="bx bx-slideshow">Slideshow</option>
                    <option value="bx bx-arch">Arch</option>
                </select>
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Titre : </label>
                <input type="text" class="rounded" name="titre" value="{{ $service->titre }}">
            </div>
            <div class="mb-3 flex flex-col my-8">
                <label class="text-2xl">Description : </label>
                <textarea name="description" id="" cols="20" rows="10" class="rounded">{{ $service->description }}</textarea>
            </div>
            
            <button type="submit" class="w-full bg-green-300 p-2 mt-10 rounded">Submit</button>
        </form>
    </section>
</x-app-layout>