@extends('layout')
@section('content')
<h1>Edit {!! $article->title !!}</h1>
<a href="{{ action('ArticlesController@index') }}" class="btn btn-primary btn-xs">Back</a>

@include ('errors.list')

{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
    @include ('articles.form', ['articleDate' => $article->date, 'submitButtonText' => 'Update Article'])
{!! Form::close() !!}
@stop