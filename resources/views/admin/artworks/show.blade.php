@extends('layouts.app')


@section('content')
    <div class="container p-5">
        <h1 class="fs-4 my-4">
            Dettagli dell'Opera d'arte: {{ $artwork->title }}
        </h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $artwork->title }}</h5>
                <p class="card-text"><strong>ID:</strong> {{ $artwork->id }}</p>
                <p class="card-text"><strong>Descrizione:</strong> </p>
                <p class="card-text"><strong>Artista:</strong> {{ $artwork->artist->name }}</p>
                <!-- Aggiungi altri campi che vuoi mostrare, ad esempio data di creazione, ecc. -->

                <a href="{{ route('admin.artworks.index') }}" class="btn btn-primary">Torna all'elenco delle opere d'arte</a>
            </div>
        </div>
    </div>
@endsection
