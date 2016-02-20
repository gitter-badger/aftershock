@extends('app')

@section('title', 'Artisan Sensation - Post')

@section('content')

<div class="col-md-9 col-xs-12">
	@foreach ($posts as $post)
		<div class="well">
			<article>
				<h2><a href="{{ url('/posts', $post->id) }}" class="text-danger">{{ $post->title }}</a></h2>
				<h5>written by <b>dikiaap</b> at {{ $post->published_at }}</h5>
				<hr>
				<div class="row">
					<div class="col-md-4 col-xs-12 pull-left">
						<img src="{{ url() }}/img/dummy/crispy-tux.png" class="img-responsive thumbnail" alt="">
					</div>
					<div class="col-md-8 col-xs-12 pull-left">
						<div class="body">
							{{ Illuminate\Support\Str::words($post->body) }}
						</div>
					</div>
				</div>
				<hr>
				<div class="clearfix">
					<div class="pull-right">
						<a href="{{ url('/posts', $post->id) }}" class="btn btn-danger" >Read More</a>
					</div>
				</div>
			</article>
		</div>
	@endforeach
</div>

@stop

@section('sidebar')

<div class="col-md-3 col-xs-12">
	<div class="well">
		<h2><center>Hello Hi ...</center></h2>
		<hr>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem dolores consectetur voluptatum debitis quibusdam iure voluptates deleniti eos, nobis, eligendi maxime nemo quos illo voluptate harum explicabo in quia tempore!
	</div>
</div>

@stop