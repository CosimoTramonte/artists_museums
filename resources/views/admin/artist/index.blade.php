@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Artist</h1>

        <table class="table table-hover table-dark table-striped ">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artists as $artist)
                    <tr>
                        <td>{{ $artist->id }}</td>
                        <td>{{ $artist->name }}</td>
                        <td>{{ $artist->date_of_birth }}</td>
                        <td> <a href="{{ route('admin.artists.show', $artist) }}" class="btn btn-success"><i
                            class="fa-solid fa-eye"></i></a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
