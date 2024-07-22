@extends('layouts.app')

@section('main-content')
    <h1 class="text-center">
        INDEX ANIMALS
    </h1>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">SPECIES</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($animal as $singleAnimal)
            <tr>
                <th scope="row">{{ $singleAnimal->id }}</th>
                <td>{{ $singleAnimal->name }}</td>
                <td>{{ $singleAnimal->description }}</td>
                <td>{{ $singleAnimal->species }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
