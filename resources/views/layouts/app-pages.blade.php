<!DOCTYPE html>
<html lang="en">
<head>
<title>Страница</title>
<meta charset="utf-8"><link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/css/grid.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/css/camera.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen">
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery-migrate-1.1.1.js"></script>
    <script type="text/javascript" src="/js/camera.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
    <script>
        jQuery(function(){      
        jQuery('#camera_wrap_1').camera({
            height: '317px',
            loader: false,
            pagination: false,
            thumbnails: false
        });
        });
    </script>
</head>
<body>
	<header>
		<div class="container_12">
			<div class="grid_12">
				<div class="wrapper">
					<a href="about.html" class="logo">design.maniacs</a>
					<nav>
						<ul class="menu">
							<li><a href="about.html">about</a></li>
							<li class="active"><a href="{{ route('pages', 'works') }}">works</a></li>
							<li><a href="clients.html">clients</a></li>
							<li><a href="blog.html">blog</a></li>
							<li><a href="contacts.html">contacts</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
    @yield('content');
</body>
</html>