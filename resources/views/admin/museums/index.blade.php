@extends('layouts.app')

@section('content')
<div class="container p-5">
    <h1 class="fs-4 my-4">
        Museums List
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
            <th scope="col">City</th>
            <th scope="col">Address</th>
            <th scope="col">Open hour</th>
            <th scope="col">Guest Artists</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($museums as $museum)
                <tr>
                    <th scope="row">{{$museum->id}}</th>
                    <td>{{$museum->name}}</td>
                    <td>{{$museum->city}}</td>
                    <td>{{$museum->address}}</td>
                    <td>{{ $museum->open_hour }}</td>
                    <td>
                        @forelse ($museum->artists as $artist)
                            <span>{{ $artist->name }},</span>
                        @empty
                            <span>no artists</span>
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
