@extends('layouts.master')
@section('content')

	@foreach($posts as $post)
	<p>
		{{ $post->id }}
	 	{{ $post->title }} 
		{{ $post->body }} 
	</p>
	@endforeach

	{{ $posts->links() }}
@stop