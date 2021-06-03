@extends('layouts.app')

@section('content')
    @include('partials.nav')

    <section class="container w-25">
        <h1 class="text-center my-5">Modifier un chiffre</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/chiffre/{{ $chiffres->id }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="number" class="form-control" name="nombre" value="{{ $chiffres->nombre }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input type="text" class="form-control" name="titre" value="{{ $chiffres->titre }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection
