<!doctype html>
<html>
<head>
	<title> Contacts </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ HTML::style('css/vendors/bootstrap.css')}}
	{{ HTML::style('css/main.css')}}

</head>
<body>
	<div class="container">
	<div class="row">
	    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse" >
                    <span class="src-only"></span>   
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand">Contacts</a>
            </div> 
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">About</a></li> 
                </ul>
            </div>
        </nav> 
    </div>

	<header class="row">
    	<div class="col col-sm-12">
        	<img src="/img/animals.jpg" alt="" id="logo" class="img-responsive center-block">
        </div>
    </header>
		
		<div class="row">
			@yield('form')
		</div>

		<div class="row">
			@yield('content')
		</div>
	</div>
	{{ HTML::script('js/vendors/jquery.min.js') }}
	{{ HTML::script('js/vendors/bootstrap.js') }}
	{{ HTML::script('js/vendors/underscore.js') }}
	{{ HTML::script('js/vendors/backbone.js') }}
	{{ HTML::script('js/main.js') }}
	{{ HTML::script('js/router.js') }}
	{{ HTML::script('js/models.js') }}
	{{ HTML::script('js/collections.js') }}
	{{ HTML::script('js/views.js') }}
	
	<script>
        $(function(){
        	$('.form-control').tooltip();
        });
    </script>

</body>
</html>