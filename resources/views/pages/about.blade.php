@extends('app')

@section('content')

<h1>About</h1>


<h3>People i Like</h3>

<ul>
	
	@foreach ($people as $person)

		<li> {{ $person }} </li>

	@endforeach
</ul>

@stop
