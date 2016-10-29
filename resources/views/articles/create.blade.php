@extends('app')


@section('content')

	<h1>Write a New Article</h1>	

	<hr/>

	{!! Form::open(['url' => 'articles']) !!}
    
    	<div class="">
	    	{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, [ 'class' => 'form-control' ]) !!}
		</div>

		<div class="">
	    	{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body', null, [ 'class' => 'form-control' ]) !!}
		</div>

		<div class="">
	    	{!! Form::label('published_at', 'Publish On:') !!}
			{!! Form::input('date','published_at', date('Y-m-d'), [ 'class' => 'form-control' ]) !!}
		</div>	

		<div class="">
	    	{!! Form::submit('Add Article', [ 'class' => 'form-control' ]) !!}			
		</div>

	{!! Form::close() !!}

@stop