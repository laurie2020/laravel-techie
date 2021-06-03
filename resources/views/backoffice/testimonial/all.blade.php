@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <table class="table container ">
        <div class="w-100 d-flex justify-content-center align-items-center flex-column mt-5 pt-5">
            <h1>testimonial</h1>
            <a class="btn btn-success" href="{{ route('testimonial.create') }}">Create</a>
        </div>
        <thead>
            <tr class="w-100">
                <th scope="col">Id</th>
                <th scope="col">Texte </th>
                <th scope="col">Personne</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $testimonial)
                <tr>
                    <th scope="row">{{ $testimonial->id }}</th>
                    <td>{{ $testimonial->texte }}</td>
                    <td>{{ $testimonial->personne->nom }}</td>
                    <td>{{ $testimonial->description }}</td>

                    <td class="d-flex">
                        <a class="btn btn-warning" href="/testimonial/{{ $testimonial->id }}/edit">Edit</a>
                        <form action="/testimonial/{{ $testimonial->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger ms-2">Delete</button>
                        </form>

                        <a href="/testimonial/{{ $testimonial->id }}" class="btn btn-primary ms-2">
                            Show
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
