@extends('layouts.master')
<title>Blog Posts</title>
    
@section('content')
    <div class="row">
        <div class="row">
            <div class="container">
                <p class="post-title text-center">
                    {{ $post->title}}
                </p>
                <p class="post-body">
                    {{ $post->body}}
                </p>
                Written By: {{{ $post->user->email }}}
                
                <div class=" post-button">
                    <p>
                        {{-- HTML::link("posts/$post->id/edit", "Edit Post", array('class' => 'btn btn-success btn-sm')) --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@stop