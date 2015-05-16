@extends('layouts.default')

@section('content')
    @foreach ($posts as $post)
        <h1>{{{ $post->title }}} By {{{ $post->user->email }}}</h1>
    @endforeach

    {{ dd(DB::getQueryLog()) }}
@stop
