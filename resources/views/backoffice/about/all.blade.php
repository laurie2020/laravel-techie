<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="">
        @if (session('message'))
            <div class="w-11/12 mx-auto bg-green-200 rounded">{{ session('message') }}</div>
        @endif
        <table class="table-auto w-11/12 mx-auto">

            <thead class="border-b-2 border-solid border-black">
                <tr>
                    <th scope="col" class="p-5">Id</th>
                    <th scope="col" class="p-5">Titre</th>
                    <th scope="col" class="p-5">Description</th>
                    <th scope="col" class="p-5">Paragraphe1</th>
                    <th scope="col" class="p-5">Paragraphe2</th>
                    <th scope="col" class="p-5">Paragraphe3</th>
                    <th scope="col" class="p-5">Image</th>
                    <th scope="col" class="p-5">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouts as $about)
                    <tr class="border-b-2 border-solid">
                        <th scope="row" class="text-center p-3">{{ $about->id }}</th>
                        <td class="text-center p-3">{{ $about->titre }}</td>
                        <td class="text-center p-3">{{ $about->description}}</td>
                        <td class="text-center p-3">{{ $about->paragraphe1}}</td>
                        <td class="text-center p-3">{{ $about->paragraphe2}}</td>
                        <td class="text-center p-3">{{ $about->paragraphe3}}</td>
                        <td class="text-center p-3"><a href="/about/{{ $about->id }}/download"><img src="{{ asset("img/" . $about->image) }}" alt="" width="250"></a></td>
                        <td class="text-center p-3">
                            <div class="flex justify-center p-3 items-center">
                                <a class="bg-yellow-500 px-3 py-2 rounded m-1" href="/about/{{ $about->id }}/edit">Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>