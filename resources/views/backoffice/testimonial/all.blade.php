<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Testimonials') }}
        </h2>
        <x-nav-link :href="route('testimonial.create')" :active="request()->routeIs('testimonial.create')">
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
                    <th scope="col" class="p-5">Texte</th>
                    <th scope="col" class="p-5">Personne</th>
                    <th scope="col" class="p-5">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr class="border-b-2 border-solid">
                        <th scope="row" class="text-center p-3">{{ $testimonial->id }}</th>
                        <td class="text-center p-3">{{ $testimonial->texte }}</td>
                        <td class="text-center p-3">{{ $testimonial->personne->nom }} {{ $testimonial->personne->prenom }}</td>
                        <td class="text-center p-3">
                            <div class="flex justify-center p-3 items-center">
                                <a class="bg-yellow-500 px-3 py-2 rounded m-1"
                                    href="/testimonial/{{ $testimonial->id }}/edit">Edit</a>
                                <form action="/testimonial/{{ $testimonial->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-red-600 px-3 py-2 rounded m-1">Delete</button>
                                </form>
                                <form action="" method="post">

                                </form>
                                <a href="/testimonial/{{ $testimonial->id }}" class="bg-blue-600 px-3 py-2 rounded m-1">
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