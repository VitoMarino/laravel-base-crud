@extends('layouts.app')

@section('main-content')
    <h1 class="text-center mb-5">
        SHOW SINGLE ANIMAL
    </h1>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-header">
                SHOW SINGLE ANIMAL
            </div>
            <div class="card-body">
                <h5 class="card-title"> Name: {{ $animal->name }}</h5>
                <p class="card-text">Description: {{ $animal->description }}</p>
                <p class="card-text"> Species: {{ $animal->species }}</p>

                <img src="{{$animal->image}}" alt="{{$animal->name}}">
                <br>

                <a href="/" class="btn btn-primary">Return on the table</a>
            </div>
        </div>
    </div>


@endsection
