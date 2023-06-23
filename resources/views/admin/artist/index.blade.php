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
                    <th scope="col">Guest of Museum</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artists as $artist)
                    <tr>
                        <td>{{ $artist->id }}</td>
                        <td>{{ $artist->name }}</td>
                        <td>{{ $artist->date_of_birth }}</td>
                        <td>
                            @forelse ($artist->museums as $museum)
                                <span>{{ $museum->name }},</span>
                            @empty
                                <span>no museum</span>
                            @endforelse
                        </td>
                        <td>
                            <a href="#" class="btn btn-success">SHOW</a>
                            <a href="#" class="btn btn-warning">EDIT</a>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
