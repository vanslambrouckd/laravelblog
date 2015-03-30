@extends('layout')

@section('content')

    <h1>Create new article</h1>

    <a href="{{ action('ArticlesController@index') }}" class="btn btn-primary btn-xs">Back</a>

    @include ('errors.list')


    {!! Form::open(['url' => 'articles']) !!}
        @include ('articles.form', ['articleDate' => date('Y-m-d'), 'submitButtonText' => 'Add Article'])
    {!! Form::Close() !!}


@stop