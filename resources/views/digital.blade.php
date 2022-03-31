<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>El Cine Digital</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="{{route('index')}}" id="logo">El Cine <em>Digital</em></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="{{route('index')}}">Inicio</a></li>
								<li><a href="{{route('video')}}">Video</a></li>
								<li><a href="{{route('api')}}">API</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

								<article>
									<header>
										<h2>{{$digital['titulo']}}</h2>
									</header>

									<span class="image featured"><img src="{{$digital['imagen']}}" alt="" /></span>


									<p>{{$digital['descripcion']}}</p>

								</article>

						</div>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">

					<!-- Icons -->
						<ul class="icons">
						<li><a href="https://github.com/FeR707/peliculas" class="icon brands fa-github" target="_blank"><span class="label">GitHub</span></a></li>
						</ul>

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="">HTML5 UP</a></li>
							</ul>
						</div>

				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>