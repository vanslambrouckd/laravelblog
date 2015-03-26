@extends('layout')
@section('content')
<h1>Edit {!! $article->title !!}</h1>
<a href="{{ action('ArticlesController@index') }}" class="btn btn-primary btn-xs">Back</a>

{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
    @include ('articles.form', ['articleDate' => $article->date, 'submitButtonText' => 'Update Article'])
{!! Form::close() !!}
@include ('errors.list')
@stop