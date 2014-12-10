@extends('layouts.master')
@section('content')


	<h1>Roll Dice</h1>

	<img align="right" src="/img/dice.png"></h1>
	<p>You rolled a {{{ $roll }}}</p>
	<p>You guessed a {{{ $guess }}}</p>
	 @if ($roll == $guess)
	 	<img align="right" src="/img/thumb.gif">
		<h2>Good Job. You got it right.</h2>
	@else
		<h3>Try Again.</h3>
	@endif

	@for ($i=1; $i <= 6 ; $i++)
		{{-- <a href="{{{ action('HomeController@rollDice', $i) }}}">Guess {{{$i}}}</a> --}}
		{{ link_to_action('HomeController@rollDice', "Guess $i", [$i], ['class' => 'btn btn-default']) }}
	@endfor

@stop
