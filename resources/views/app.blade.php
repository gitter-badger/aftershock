<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>

	<link rel="icon" type="image/x-icon" href="{{ url() }}/img/favicon.ico" />
    <link rel="icon" href="{{ url() }}/img/favicon.png" />
    <link rel="apple-touch-icon" href="{{ url() }}/img/favicon.png" />

	<link rel="stylesheet" href="{{ url() }}/css/vendor.css">
  	<script src="{{ url() }}/js/jquery.min.js"></script>
  	<script src="{{ url() }}/js/bootstrap.min.js"></script>
</head>
<body>
  @include('partials.nav')
	<div class="container">
		<div class="row">
			
				@yield('content')
			
				@yield('sidebar')
			
		</div>
	</div>
</body>
</html>