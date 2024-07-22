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
                <h5 class="card-title">{{ $animal->name }}</h5>
                <p class="card-text">{{ $animal->description }}</p>
                <p class="card-text"> {{ $animal->species }}</p>
                <a href="/" class="btn btn-primary">Return on the table</a>
            </div>
        </div>
    </div>


@endsection
