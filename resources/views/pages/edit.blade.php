@extends('layouts.app')

@section('main-content')
    <h1 class="text-center mb-5">
        EDIT ANIMAL
    </h1>

    <!--Quando chiedo il post vado in CREATE, quando invece lo salvo e ne creo uno nuovo vado in STORE-->
    <div class="p-5 d-flex justify-content-center">
        <form action="{{route('animal.update', $animal)}}" method='POST'>
            @csrf
            @method('PUT')
            <input type="text" id="name" name="name" value="{{$animal->name}}" placeholder="Name" class="form-label">

            <input type="text" id="description" name="description" value="{{$animal->description}}" placeholder="Description" class="form-label">

            <input type="text" id="species" name="species" value="{{$animal->species}}" placeholder="Species" class="form-label">

            <input type="text" id="image" name="image" value="{{$animal->image}}" placeholder="Image_url" class="form-label">

            <input type="submit" value="Update" class="btn btn-primary">
        </form>
    </div>

@endsection
