@extends('layouts.default')
@section('content')
    @if(count($users))
        @foreach($users as $user)
            <p><strong>{{{ $user->title }}}</strong> {{{ $user->email }}}</p>
        @endforeach
    @endif
@stop
