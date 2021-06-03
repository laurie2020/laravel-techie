@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <table class="table container ">
        <div class="w-100 d-flex justify-content-center align-items-center flex-column mt-5 pt-5">
            <h1></h1>
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
            <tr>
                <th scope="row">{{ $chiffre->id }}</th>
                <td>{{ $chiffre->nombre }}</td>
                <td>{{ $chiffre->titre }}</td>
                <td><a href="/chiffre" class="btn btn-danger">Retour</a></td>
            </tr>
        </tbody>
    </table>
@endsection
