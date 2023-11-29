@extends('layouts.admin')

@section('content')
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">version</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($technologies as $technology)
        <tr>
            <td>{{$technology->name}}</td>
            <td>{{$technology->description}}</td>
            <td>{{$technology->version}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
  {{ $technologies->links() }}
</div>

@endsection
