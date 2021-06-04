<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
        <x-nav-link :href="route('chiffre.create')" :active="request()->routeIs('chiffre.create')">
            {{ __('Create') }}
        </x-nav-link>
    </x-slot>

    <div class="">
        @if (session('message'))
            <div class="w-11/12 mx-auto bg-green-200 rounded">{{ session('message') }}</div>
        @endif
        <table class="table-auto w-3/4 mx-auto">

            <thead class="border-b-2 border-solid border-black">
                <tr>
                    <th scope="col" class="p-5">Id</th>
                    <th scope="col" class="p-5">Titre</th>
                    <th scope="col" class="p-5">Description</th>
                    <th scope="col" class="p-5">Image</th>
                    <th scope="col" class="p-5">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($homes as $home)
                    <tr class="border-b-2 border-solid">
                        <th scope="row" class="text-center p-3">{{ $home->id }}</th>
                        <td class="text-center p-3">{{ $home->titre }}</td>
                        <td class="text-center p-3">{{ $home->description}}</td>
                        <td class="text-center p-3"><a href="/home/{{ $home->id }}/download"><img src="{{ asset("img/" . $home->image) }}" alt="" width="150"></a></td>
                        <td class="text-center p-3">
                            <div class="flex justify-center p-3 items-center">
                                <a class="bg-yellow-500 px-3 py-2 rounded m-1" href="/home/{{ $home->id }}/edit">Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>