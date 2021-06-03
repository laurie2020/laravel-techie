@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <table class="table container ">
        <div class="w-100 d-flex justify-content-center align-items-center flex-column mt-5 pt-5">
            <h1>personne</h1>
            <a class="btn btn-success" href="{{ route('personne.create') }}">Create</a>
        </div>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Photo</th>
                <th scope="col">Profession</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personnes as $personne)
                <tr>
                    <th scope="row">{{ $personne->id }}</th>
                    <td>{{ $personne->nom }}</td>
                    <td>{{ $personne->prenom }}</td>
                    <td>{{ $personne->photo }}</td>
                    <td>{{ $personne->profession }}</td>

                    <td class="d-flex">
                        <a class="btn btn-warning" href="/personne/{{ $personne->id }}/edit">Edit</a>
                        <form action="/personne/{{ $personne->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger ms-2">Delete</button>
                        </form>
                        <form action="" method="post">

                        </form>
                        <a href="/personne/{{ $personne->id }}" class="btn btn-primary ms-2">
                            Show
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
