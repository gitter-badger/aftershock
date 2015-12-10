@extends('app')

@section('content')
		
		<h2>Write a New Article</h2>

		{!! Form::model($posts = new \App\Post, (['url' => 'posts'])) !!}
			@include('partials.form', ['submitButtonText' => 'Add Article'])	
		{!! Form::close() !!}

@stop