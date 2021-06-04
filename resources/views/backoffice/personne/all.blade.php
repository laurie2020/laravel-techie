<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Personne') }}
        </h2>
        <x-nav-link :href="route('personne.create')" :active="request()->routeIs('personne.create')">
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
                    <th scope="col" class="p-5">Photo</th>
                    <th scope="col" class="p-5">Nom</th>
                    <th scope="col" class="p-5">Prenom</th>
                    <th scope="col" class="p-5">Profession</th>
                    <th scope="col" class="p-5">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personnes as $personne)
                    <tr class="border-b-2 border-solid">
                        <th scope="row" class="text-center p-3">{{ $personne->id }}</th>
                        <td class="text-center p-3"> <a href="/personne/{{ $personne->id }}/download"><img src="{{ asset("img/testimonials/" . $personne->photo) }}" alt="" width="100"></a> </td>
                        <td class="text-center p-3">{{ $personne->nom }}</td>
                        <td class="text-center p-3">{{ $personne->prenom }}</td>
                        <td class="text-center p-3">{{ $personne->profession }}</td>
                        <td class="text-center p-3">
                            <div class="flex justify-center p-3 items-center">

                                <a class="bg-yellow-500 px-3 py-2 rounded m-1" href="/personne/{{ $personne->id }}/edit">Edit</a>
                                <form action="/personne/{{ $personne->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-red-600 px-3 py-2 rounded m-1">Delete</button>
                                </form>
                                <form action="" method="post">
                
                                </form>
                                <a href="/personne/{{ $personne->id }}" class="bg-blue-600 px-3 py-2 rounded m-1">
                                    Show
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>