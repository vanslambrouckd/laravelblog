@extends('layout')

@section('content')

<h1>Articles</h1>

<a class="btn btn-primary btn-xs pull-right" href="{{ action('ArticlesController@create') }}">Add article</a>

@if (count($articles))
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="20">
                    <input type="checkbox" />
                </th>
                <th>Title</th>
                <th width="20">Edit</th>
                <th width="20">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>{{ $article->title }}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ action('ArticlesController@edit', [$article->id]) }}"><span class="glyphicon glyphicon-pencil"></span></a>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@else
<div class="alert alert-info">
    No articles available
</div>
@endif

@stop