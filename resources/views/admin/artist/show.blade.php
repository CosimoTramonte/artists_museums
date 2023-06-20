@extends('layouts.app')

@section('content')
    <div class="container my-ctn">
        <span class="d-inline">
            <h1>Artist: {{ $artist->name }} {{ $artist->surname }}</h1>
        </span>

        <p>{!! $artist->description !!}</p>
        <p>{{$artist->type}}</p>
        <p>{{$artist->date_of_birth}}</p>
        <p>{{$artist->number_of_works}}</p>
    </div>
@endsection
