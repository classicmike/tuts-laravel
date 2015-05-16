@extends('layouts.default')

@section('content')

    {{ Form::model($user, array('route' => array('user.update', $user->id), 'class' => 'form', 'method' => 'put')) }}

        <li>
            {{ Form::label('email', 'Your email') }}
            {{ Form::email('email') }}
            {{ $errors->first('email') }}
        </li>
        <li>
            {{ Form::label('password', 'Your Password') }}
            {{ Form::password('password') }}
            {{ $errors->first('password') }}
        </li>

        <li>
            {{ Form::label('active', 'Active?') }}
            {{ Form::checkbox('active') }}
            {{ $errors->first('active') }}
        </li>

        <li>
            {{ Form::label('permission', 'Your Permission') }}
            {{ Form::select('permission', array('1' => 'Webmaster', '2' => 'Editor', '3' => 'Member')) }}
            {{ $errors->first('permission') }}
        </li>

        <li>
            {{ Form::submit('Save') }}
        </li>

    {{ Form::close() }}
@stop