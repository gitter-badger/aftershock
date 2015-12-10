@extends('app')

@section('content')
		
		<h2>Edit article : {{ $posts->title }}</h2>

		{!! Form::model($posts, ['method' => 'PATCH', 'action' => ['PostsController@update', $posts->id]]) !!}
			@include('partials.form', ['submitButtonText' => 'Update'])	
		{!! Form::close() !!}

@stop