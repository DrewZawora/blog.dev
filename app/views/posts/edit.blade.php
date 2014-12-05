@extends('layouts.master')
@section('content')

@if($errors-has('title'))
	$errors->first('title', '<span class="help-block">:message</span>');
@endif

<div class="col-md-6">
	{{ Form::model($post, (array('action' => 'PostController@update', $post->id], 'method' => 'PUT'))) }}
		<div class="form-group">
			<label for ="title">Title: </label>
			<input type="text" class="form-control" name="title" value="{{{ $post->title }}}" autofocus>
		</div>
		<div class="form-group">
			<label for="body">Body: </label>
			<textarea name="body" rows="4" class="form-control">{{{ $post->body }}}
			</textarea>
		</div>

		<button type="submit" class="btn btn-default">Submit</button>

	{{ Form::close() }}
</div>
<div class-"col-md-6">
</div>

@stop

