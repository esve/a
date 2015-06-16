@section('title', 'Bienvenidos')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ESVE - @yield('title')</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Styling -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- Jquery UI -->
    {!! Html::style('/jquery-ui1.11.2.vinotinto/jquery-ui.min.css') !!}
    {!! Html::script('/jquery-ui1.11.2.vinotinto/jquery-ui.min.js') !!}

    <!-- FancyBox -->
    {!! Html::style('/fancybox/source/jquery.fancybox.css?v=2.1.5') !!}
    {!! Html::script('/fancybox/source/jquery.fancybox.pack.js?v=2.1.5') !!}

    {!! Html::style('/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5') !!}
    {!! Html::script('/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5') !!}
    {!! Html::script('/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6') !!}
    {!! Html::style('/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7') !!}
    {!! Html::script('/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7') !!}

    <!-- Mi Estilo -->
    {!! Html::style('/css/app.css') !!}
    {!! Html::style('/css/bootstrap-dark.min.css') !!}


    <!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">ESVE</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('users') }}">Usuarios</a></li>
                    <li><a href="{{ url('dash') }}">Friends Overall</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
                        <a href="{{ url('/user/'.Auth::user()->username) }}">
                            {!! HTML::image(checkMyUserPhoto(), 'a picture', array('class' => 'topnavUserThumb')) !!}
                           </a>
                        <li class="dropdown" style="margin-left:8px">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->username }}  ( {{Auth::user()->email}} ) <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile') }}">Profile</a></li>
                                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
    @yield('content')
	<!-- Scripts
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#profileThumbBig").fancybox({
            });
        });

        $(document).ready(function() {
            $( "#tabs" ).tabs();
        });

    </script>
</body>
</html>