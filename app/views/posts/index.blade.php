@extends('layouts.master')
@section('content')

	<title>Blog Posts</title>
    
    <div class="row background">
    <div class="container background"> 
        <div class="row background">
            <div class="container">
                <div class="text-center titleHeader">
                    <h1 class="blogHeader">All Blog Posts</h1>
                </div>       
            </div>
        </div>
        <div class="row postBox">
            <div id="articles_container" class="container">
                @foreach ($posts as $key => $post)
                    <div class=" col-md-4"> 
                        <article class="postArticle">
                            <div class="post-content">
                                <div class="">
                                    <p class="post-title">
                                        {{ $post->title }}
                                    </p>
                                </div>
                                <div class="">
                                    <p class="post-body">
                                        {{{ substr($post->body, 0, 120) . "..." }}}
                                    </p>
                                </div>
                            </div>
                        </article>
                                <div class=" post-button">
                                    <p>
                                        {{ HTML::link("posts/$post->id", "Go to Post", array('class' => 'btn btn-primary btn-md')) }}
                                        
                                        @if (Auth::check())
                                            <a href="{{ action('PostsController@edit', $post->id) }}" class="btn btn-success" >Edit Post</a>
                                            <button class="btn btn-danger delete-btn" data-post-id=" {{{ $post->id }}}">Delete</button>
                                        @endif
                                    </p>
                                </div>
                Written By: {{{ $post->user->email }}}
                                
                    </div>
                @endforeach
            </div>
        </div> <!-- end postBox -->
        <div class="background" id="linksBtn">
            <div class=" background container text-center">
                {{ $posts->links() }} {{--  ->appends('search', '*')->links() --}}
            </div>
        </div>
    </div>
</div> <!-- container row -->
        {{ Form::open(array('method' => 'delete', 'id' => 'delete-form')) }}
                
        {{ Form::close() }}
@stop

@section('bottomscript')
<script type="text/javascript" src="/js/delete-post.js"></script>

@stop