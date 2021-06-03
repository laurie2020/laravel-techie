@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <table class="table container ">
        <div class="w-100 d-flex justify-content-center align-items-center flex-column mt-5 pt-5">
            <h1>service</h1>
            <a class="btn btn-success" href="{{ route('service.create') }}">Create</a>
        </div>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Icone 1</th>
                <th scope="col">Icone 2</th>
                <th scope="col">Titre</th>
                <th scope="col">description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <th scope="row">{{ $service->id }}</th>
                    <td>
                        <div class="{{ $service->icone1 }}"></div>
                    </td>
                    <td><i class="{{ $service->icone2 }}"></i></td>
                    <td>{{ $service->titre }}</td>
                    <td>{{ $service->description }}</td>

                    <td class="d-flex">
                        <a class="btn btn-warning" href="/service/{{ $service->id }}/edit">Edit</a>
                        <form action="/service/{{ $service->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger ms-2">Delete</button>
                        </form>
                        <form action="" method="post">

                        </form>
                        <a href="/service/{{ $service->id }}" class="btn btn-primary ms-2">
                            Show
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
