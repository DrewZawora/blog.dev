@extends('layouts.master')
@section('content')

	<h1>Hello {{{ $name }}} </h1>

	<p> meh meh meh meh meh meh meh meh meh meh meh meh </p>

	@for ($i =1; $i <= 6; $i++)
	<a href="{{{ action('HomeController@rollDice', $i) }}}">Guess {{{ $i }}}</a>
	{{ link_to_action('HomeController@rollDice', "Guess $i", [$i], ['class' => 'btn btn default'])}}

	@endfor
@stop