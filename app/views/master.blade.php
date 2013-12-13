<!doctype html>
<html>
<head>
	<title> Contacts </title>
	{{ HTML::style('css/vendors/bootstrap.css')}}
	{{ HTML::style('css/main.css')}}

</head>
<body>
	<div class="conatiner">
		@yield('container')
	</div>
	{{ HTML::script('js/vendors/jquery.min.js') }}
	{{ HTML::script('js/vendors/underscore.js') }}
	{{ HTML::script('js/vendors/backbone.js') }}
	{{ HTML::script('js/main.js') }}
	{{ HTML::script('js/router.js') }}
	{{ HTML::script('js/models.js') }}
	{{ HTML::script('js/collections.js') }}
	{{ HTML::script('js/views.js') }}
	
</body>
</html>