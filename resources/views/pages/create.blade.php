@extends('layouts.app')

@section('main-content')
    <h1 class="text-center mb-5">
        CREATE ANIMAL
    </h1>

    <!--Quando chiedo il post vado in CREATE, quando invece lo salvo e ne creo uno nuovo vado in STORE-->
    <h5 class="text-center">For created other animal compile this form</h5>
    <div class="p-5 d-flex justify-content-center">
        <form action="{{route('animal.store')}}" method='POST'>
            @csrf
            <input type="text" id="name" name="name" placeholder="Name" class="form-label">

            <input type="text" id="description" name="description" placeholder="Description" class="form-label">

            <input type="text" id="species" name="species" placeholder="Species" class="form-label">

            <input type="text" id="image" name="image" placeholder="Image_url" class="form-label">

            <input type="submit" value="Create" class="btn btn-primary">
        </form>
    </div>

@endsection
