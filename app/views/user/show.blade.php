@extends('layouts.default')

@section('content')
    <p>{{{ $user->email or 'default value' }}}</p>

    @foreach($user->posts as $post)
        <li>{{{ $post->title }}}</li>
    @endforeach
    <h2>Categories</h2>
    @foreach($user->categories as $category)
        <li>{{{ $category->name }}}</li>
    @endforeach
@stop

@section('sidebar')
    @parent
    <p><a href="#">Some Link</a></p>
    <p><a href="#">Some Link</a></p>
    <p><a href="#">Some Link</a></p>
@stop