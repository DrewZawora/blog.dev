@extends('layouts.master')
@section('content')

{{ Form::open(['action' => 'HomeController@doLogin']) }}

{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'eMail']) }}
{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Password']) }}

{{ Form::submit('Log In!', ['class' => 'btn btn-primary']) }}

{{ Form::close() }}
@stop