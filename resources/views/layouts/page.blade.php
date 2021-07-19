<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Dr. Ibrahim Bello Dauda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('base') }}/images/a.png">
    <meta name="description" content="Dr Ibrahim Bello Dauda - Get access to great insights on philosophy, leadership and development."/>
    <link rel="canonical" href="{{ url('/') }}"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Dr Ibrahim Bello Dauda"/>
    <meta property="og:description" content="Dr Ibrahim Bello Dauda - Get access to great insights on philosophy, leadership and development."/>
    <meta property="og:url" content="{{ url('/') }}"/>
    <meta property="og:site_name" content="Dr Ibrahim Bello Dauda"/>
    <meta property="article:publisher" content="https://web.facebook.com/dribrahimbdauda"/>
    <meta property="article:author" content="https://web.facebook.com/dribrahimbdauda"/>
    <meta property="og:image" content="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1626697298/a-2_ku7dam.png"/>
    <meta property="og:image:width" content="1000"/>
    <meta property="og:image:height" content="1000"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:creator" content="@el_dauda"/>
    <meta name="twitter:site" content="@el_dauda"/>
	<!-- STYLES -->
	<link rel="stylesheet" href="{{ asset('base') }}/css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('base') }}/css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('base') }}/css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('base') }}/css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('base') }}/css/style.css" type="text/css" media="all">


</head>

<body>

<!-- preloader -->
<div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

	<!-- header -->
	<header class="header-default">
		<nav class="navbar navbar-expand-lg">
			<div class="container-xl">
				<!-- site logo -->
				<a class="navbar-brand" href="/"><img src="{{ asset('base') }}/images/a.png" alt="Ibrahim Bello Dauda" style="max-width: 125px" /></a>

				<div class="collapse navbar-collapse">
					<!-- menus -->
					<ul class="navbar-nav mr-auto">
						<li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
							<a class="nav-link" href="/">Home</a>

						</li>
						<li class="nav-item {{ (request()->is('articles')) ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('articles') }}">Articles</a>
						</li>
						<li class="nav-item {{ (request()->is('library')) ? 'active' : '' }}">
							<a class="nav-link" href="#">Library</a>
						</li>
						<li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('about') }}">About IBD</a>
						</li>
						<li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('contact') }}">Contact</a>
						</li>
					</ul>
				</div>

				<!-- header right section -->
				<div class="header-right">
					<!-- social icons -->
					<ul class="social-icons list-unstyled list-inline mb-0">
						<li class="list-inline-item"><a href="https://web.facebook.com/dribrahimbdauda" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li class="list-inline-item"><a href="https://twitter.com/el_dauda" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="https://www.linkedin.com/in/dr-ibrahim-bello-d-53073268/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li class="list-inline-item"><a href="https://www.youtube.com/channel/UCe_yLoXVHAEoSL4PTtke-Dg" target="_blank"><i class="fab fa-youtube"></i></a></li>
					</ul>
					<!-- header buttons -->
					<div class="header-buttons">
						<button class="search icon-button">
							<i class="icon-magnifier"></i>
						</button>
						<button class="burger-menu icon-button">
							<span class="burger-icon"></span>
						</button>
					</div>
				</div>
			</div>
		</nav>
	</header>
    {{ $slot }}


    <footer>
		<div class="container-xl">
			<div class="footer-inner">
				<div class="row d-flex align-items-center gy-4">
					<!-- copyright text -->
					<div class="col-md-4">
						<span class="copyright">© 2021 IBD. Designed by <a href="www.aromedev.co" target="_blank">Arome</a>.</span>
					</div>

					<!-- social icons -->
					<div class="col-md-4 text-center">
						<ul class="social-icons list-unstyled list-inline mb-0">
							<li class="list-inline-item"><a href="https://web.facebook.com/dribrahimbdauda" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li class="list-inline-item"><a href="https://twitter.com/el_dauda" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="https://www.linkedin.com/in/dr-ibrahim-bello-d-53073268/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li class="list-inline-item"><a href="https://www.youtube.com/channel/UCe_yLoXVHAEoSL4PTtke-Dg" target="_blank"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>

					<!-- go to top button -->
					<div class="col-md-4">
						<a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div><!-- end site wrapper -->

<!-- search popup area -->
<div class="search-popup">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>
	<!-- content -->
	<div class="search-content">
		<div class="text-center">
			<h3 class="mb-4 mt-0">Press ESC to close</h3>
		</div>
		<!-- form -->
		<form class="d-flex search-form">
			<input class="form-control me-2" type="search" placeholder="Search and press enter ..." aria-label="Search">
			<button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
		</form>
	</div>
</div>

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>

	<!-- logo -->
	<div class="logo">
		<img src="{{ asset('base') }}/images/a.png" alt="Ibrahim Bello Dauda" />
	</div>

	<!-- menu -->
	<nav>
		<ul class="vertical-menu">
			<li class="{{ (request()->is('')) ? 'active' : '' }}>
				<a href="/">Home</a>
			</li>
			<li class="{{ (request()->is('articles')) ? 'active' : '' }}"><a href="{{ url('articles') }}">Articles</a></li>
			<li><a href="#">Library</a></li>
			<li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ url('about') }}">About IBD</a></li>
			<li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{ url('contact') }}">Contact</a></li>
		</ul>
	</nav>

	<!-- social icons -->
	<ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
		<li class="list-inline-item"><a href="https://web.facebook.com/dribrahimbdauda" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
		<li class="list-inline-item"><a href="https://twitter.com/el_dauda" target="_blank"><i class="fab fa-twitter"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
		<li class="list-inline-item"><a href="https://www.linkedin.com/in/dr-ibrahim-bello-d-53073268/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
		<li class="list-inline-item"><a href="https://www.youtube.com/channel/UCe_yLoXVHAEoSL4PTtke-Dg" target="_blank"><i class="fab fa-youtube"></i></a></li>
	</ul>
</div>

<!-- JAVA SCRIPTS -->
<script src="{{ asset('base') }}/js/jquery.min.js"></script>
<script src="{{ asset('base') }}/js/popper.min.js"></script>
<script src="{{ asset('base') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('base') }}/js/slick.min.js"></script>
<script src="{{ asset('base') }}/js/jquery.sticky-sidebar.min.js"></script>
<script src="{{ asset('base') }}/js/custom.js"></script>

</body>
</html>
