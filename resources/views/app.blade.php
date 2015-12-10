<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Artisan Sensation</title>
	<link rel="stylesheet" href="{{ url() }}/assets/css/bootstrap.min.css">
  <script src="{{ url() }}/assets/js/jquery.js"></script>
  <script src="{{ url() }}/assets/js/bootstrap.min.js"></script>
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