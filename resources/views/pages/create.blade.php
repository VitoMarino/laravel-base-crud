@extends('layouts.app')

@section('main-content')
    <h1 class="text-center mb-5">
        CREATE ANIMAL
    </h1>

    <!--Questa porzione di codice serve a mostrarmi i messaggi di errore qualora qualcosa scritto non fosse corretto e quindi la validazione sta funzionando-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!--Quando chiedo il post vado in CREATE, quando invece lo salvo e ne creo uno nuovo vado in STORE-->
    <h5 class="text-center">For created other animal compile this form</h5>
    <div class="p-5 d-flex justify-content-center">
        <form action="{{ route('animal.store') }}" method='POST'>
            @csrf
            <div class="d-flex flex-column">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" class="form-label" value="{{ old('name')}}">

                <label for="description">Description</label>
                <input type="text" id="description" name="description" placeholder="Description" class="form-label" value="{{old('description')}}">

                <label for="species">Species</label>
                <input type="text" id="species" name="species" placeholder="Species" class="form-label" value="{{old('species')}}">

                <label for="image">Image URL</label>
                <input type="text" id="image" name="image" placeholder="Image_url" class="form-label" value="{{old('image')}}">

                <input type="submit" value="Create" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
