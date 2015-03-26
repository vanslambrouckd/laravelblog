@extends('layout')

@section('content')

    @if ($firstname == 'david')
        <h1>About david</h1>
    @else
        <h1>About page</h1>
    @endif

    @if (count($people))
        <h3>People i like:</h3>

        <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
        </ul>
    @endif
    I am  {{$firstname}} {{$lastname}}
@stop