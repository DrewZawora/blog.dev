@extends('layouts.master')
    <title>Blog Posts</title>
    
@section('content')
    <div class="container">
        <div >
            <h1 class="blogHeader">Edit Post</h1></a>
        </div>        
    </div>
    <div class="container">
        
    {{-- edit post entry--}}
       {{ Form::open(array('method' => 'PUT', 'action' => ['PostsController@update', $post->id], 'role' => 'form', 'class' => 'form-horizontal')) }}
            <div class="form-group">
            {{ Form::label('title', 'Title', array('class')) }}
            {{-- if error dump this message--}}
                {{$errors->first('title', '<span class="help-block alert alert-danger">:message</span>')}}
            </div>
            <div class="form-group">
            {{ Form::text('title', $post->title, (array('class' => 'form-control', 'autofocus' => 'autofocus'))) }}
            </div>
            <div class="form-group">
            {{ Form::label('body', 'Body') }}
            {{-- if error dump this message--}}
                {{$errors->first('body', '<span class="help-block alert alert-danger">:message</span>')}}
            </div>
            <div class="form-group">
            {{ Form::textarea('body', $post->body, (array('class' => 'form-control'))) }}
            </div>
            {{ Form::submit('Edit!', (array('class' => 'btn btn-success')))}}
            
        {{ Form::close() }}
        
    {{-- delete post entry--}}
        {{ Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id], 'role' => 'form', 'class' => 'form-horizontal', 'id' => 'delete-form')) }}
                
            {{ Form::submit('Delete!', (array('class' => 'btn btn-danger')))}}
        
        {{ Form::close() }}
             
    </div>
@stop

@section('bottomscript')
    <script type="text/javascript">
        $('#delete-form').submit(function(e)
        {
            if(!confirm('Are you sure you want to delete this post?'))
            {
                e.preventDefault();
            }
        });
    </script>
@stop