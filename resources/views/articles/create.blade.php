@extends('layout')

@section('content')

<h1>Create new article</h1>


{!! Form::open(['url' => 'articles']) !!}
    @include ('articles.form', ['submitButtonText' => 'Add Article'])
{!! Form::Close() !!}

@include ('errors.list')

@stop