@extends('layouts.default')

@section('content')

    {{ Form::model($user, array('route' => array('user.update', $user->id), 'class' => 'form', 'method' => 'put')) }}

        <li>
            {{ Form::label('email', 'Your email') }}
            {{ Form::email('email') }}
        </li>
        <li>
            {{ Form::label('password', 'Your Password') }}
            {{ Form::password('password') }}
        </li>

        <li>
            {{ Form::label('permission', 'Your Permission') }}
            {{ Form::select('permission', array('1' => 'Webmaster', '2' => 'Editor', '3' => 'Member')) }}
        </li>

        <li>
            {{ Form::submit('Save') }}
        </li>

    {{ Form::close() }}
@stop