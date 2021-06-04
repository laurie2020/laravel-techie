<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Services') }}
        </h2>
        <x-nav-link :href="route('service.create')" :active="request()->routeIs('service.create')">
            {{ __('Create') }}
        </x-nav-link>
    </x-slot>

    <div class="">
        <table class="table-auto w-3/4 mx-auto">

            <thead class="border-b-2 border-solid border-black">
                <tr>
                    <th scope="col" class="p-5">Id</th>
                    <th scope="col" class="p-5">Icone</th>
                    <th scope="col" class="p-5">Titre</th>
                    <th scope="col" class="p-5">Description</th>
                    <th scope="col" class="p-5">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr class="border-b-2 border-solid">
                        <th scope="row" class="text-center p-3">{{ $service->id }}</th>
                        <td class="text-center p-3"><i class="{{ $service->icone2 }}"></i></td>
                        <td class="text-center p-3">{{ $service->titre }}</td>
                        <td class="text-center p-3">{{ $service->description }}</td>
                        <td class="text-center p-3">
                            <div class="flex justify-center p-3 items-center">

                                <a class="bg-yellow-500 px-3 py-2 rounded m-1" href="/service/{{ $service->id }}/edit">Edit</a>
                                <form action="/service/{{ $service->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-red-600 px-3 py-2 rounded m-1">Delete</button>
                                </form>
                                <form action="" method="post">
                
                                </form>
                                <a href="/service/{{ $service->id }}" class="bg-blue-600 px-3 py-2 rounded m-1">
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