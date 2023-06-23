@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <h1 class="fs-4 my-4">
            Artworks List
        </h1>

        @if (session('deleted'))
            <div class="alert alert-success" role="alert">
                {{ session('deleted') }}
            </div>
        @endif

        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Artists</th>

                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artworks as $artwork)
                    <tr>
                        <th scope="row">{{ $artwork->id }}</th>
                        <td>{{ $artwork->name }}</td>
                        <td>{{ $artwork->artist->name }}</td>

                        <td>
                            <a href="{{ route('admin.artworks.show', $artwork) }}" class="btn btn-success">SHOW</a>
                            <a href="#" class="btn btn-warning">EDIT</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
