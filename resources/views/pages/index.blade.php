@extends('layouts.app')

@section('main-content')
    <h1 class="text-center mb-5">
        INDEX ANIMALS
    </h1>

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">SPECIES</th>
                <th scope="col">CREATE</th>
                <th scope="col">EDIT</th>
                <th scope="col">DELETE</th>
            </tr>
        </thead>

        <tbody>
            @if (session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>
            @endif
            @foreach ($animal as $singleAnimal)
            <tr>
                <th scope="row">{{ $singleAnimal->id }}</th>
                <td>{{ $singleAnimal->name }}</td>
                <td>{{ $singleAnimal->description }}</td>
                <td>{{ $singleAnimal->species }}</td>
                <td><a href="{{route('animal.create', $singleAnimal)}}" class="btn btn-primary">Create</a></td>
                <td><a href="{{route('animal.edit', $singleAnimal)}}" class="btn btn-success">Edit</a></td>
                <!--Il tag a, ha metodo GET, perciò se voglio fare una DELETE (destroy) devo usare un form con metodo POST-->
                <td>
                    <form action="{{route('animal.destroy', $singleAnimal)}}" method="POST" id="delete-form" class="delete-form">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-warning">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('custom-script')
    @vite('resources/js/delete-confirm.js')
@endsection
