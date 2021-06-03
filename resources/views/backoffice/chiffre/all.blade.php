@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <table class="table container ">
        <div class="w-100 d-flex justify-content-center align-items-center flex-column mt-5 pt-5">
            <h1>Chiffre</h1>
            <a class="btn btn-success" href="{{ route('chiffre.create') }}">Create</a>
        </div>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Titre</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chiffres as $chiffre)
                <tr>
                    <th scope="row">{{ $chiffre->id }}</th>
                    <td>{{ $chiffre->nombre }}</td>
                    <td>{{ $chiffre->titre }}</td>
                    <td class="d-flex">
                        <a class="btn btn-warning" href="/chiffre/{{ $chiffre->id }}/edit">Edit</a>
                        <form action="/chiffre/{{ $chiffre->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger ms-2">Delete</button>
                        </form>
                        <form action="" method="post">

                        </form>
                        <a href="/chiffre/{{ $chiffre->id }}" class="btn btn-primary ms-2">
                            Show
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
