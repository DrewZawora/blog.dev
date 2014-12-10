@extends('layouts.master')
@section('content')

<h1>Create New Blog Post</h1>

<div class="container-fluid">        
        <h1 id="blogTitle">New Blog Post</h1>
    </div>
    <div class="container">
        
        {{ Form::open(array('action' => 'PostsController@store', 'role' => 'form', 'class' => 'form-horizontal')) }}
            <div class="form-group">
                {{ Form::label('title', 'Title', array('class')) }}
                {{-- if error dump this message--}}
                    {{$errors->first('title', '<span class="help-block alert alert-danger">:message</span>')}}
            </div>
            <div class="form-group">
                {{ Form::text('title', Input::old('title'), (array('placeholder' => 'Title', 'class' => 'form-control'))) }}
            </div>
            <div class="form-group">
                {{ Form::label('body', 'Body') }}
                {{-- if error dump this message--}}
                    {{$errors->first('body', '<span class="help-block alert alert-danger">:message</span>')}}
            </div>
            <div class="form-group">
                {{ Form::textarea('body', Input::old('body'), (array('placeholder' => 'Insert Body Here', 'class' => 'form-control'))) }}
            </div>
            <div>
                {{ Form::submit('Submit!', (array('class' => 'btn btn-default')))}}
            </div>
        {{ Form::close() }}

    </div>
@stop