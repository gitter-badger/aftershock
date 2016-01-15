@extends('app')

@section('title', $posts->title)

@section('content')
	<h1>{{ $posts->title }}</h1>

	<div class="body">
		{{ $posts->body }}
	</div>
@stop