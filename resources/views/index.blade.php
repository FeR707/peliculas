<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>PelisHistoria</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="{{route('index')}}" id="logo">Pelis<em>Historia</em></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="{{route('index')}}">Inicio</a></li>
								<li><a href="{{route('video')}}">Video</a></li>
								<li><a href="">API</a></li>
							</ul>
						</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<h2>Explora <em>sobre los distintos generos del Cine</em></h2>
						<a href="{{route('tipo')}}" class="button" >Ver</a>
					</header>
				</section>

			<!-- Highlights -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<section class="col-4 col-12-narrower">
								<div class="box highlight">
									<a href="{{route('historia')}}" class="image center"><img src="images/origen.png" alt=""></a>
									<h3>La Historia del Cine</h3>
									<p>Como fue evolucionando el mundo del Cine como hoy lo conocemos.</p>
								</div>
							</section>
							<section class="col-4 col-12-narrower">
								<div class="box highlight">
									<a href="{{route('origen')}}" class="image center"><img src="images/historia.png" alt=""></a>
									<h3>El Origen del Cine</h3>
									<p>Como se origino, que lo inspiro y cuales fueron las causas del cine.</p>
								</div>
							</section>
							<section class="col-4 col-12-narrower">
								<div class="box highlight">
									<a href="{{route('digital')}}" class="image center"><img src="images/cinta.png" alt=""></a>
									<h3>Cine Digital</h3>
									<p>El cine tal cual como hoy lo conocemos.</p>
								</div>
							</section>
						</div>
					</div>
				</section>

			<!-- Gigantic Heading -->
				<section class="wrapper style2">
					<div class="container">
						<header class="major">
							<h2>Explora nuestra seleccion de peliculas</h2>
							
						</header>
					</div>
				</section>

			<!-- Posts -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row">
							@foreach($pelicula as $movie)

							<section class="col-6 col-12-narrower">
								<div class="box post">
									<a href="{{route('datosPelicula', $movie['id'])}}" class="image left"><img src="{{$movie['imagen']}}" alt="" /></a>
									<div class="inner">
										<a href="{{route('datosPelicula', $movie['id'])}}"><h3>{{$movie['nombre']}}</h3></a>
										<p>Estreno: {{$movie['fecha_estreno']}}</p>
										<p>Pais: {{$movie['pais']}}</p>
										<p>Genero: {{$movie->Tipo->nombre}}</p>
									</div>
								</div>
							</section>

							@endforeach
						</div>
					</div>
				</section>

			<!-- CTA -->
				<section id="cta" class="wrapper style3">
					<div class="container">
						<header>
							<h2>Checa como se hizo la pagina</h2>
							<a href="#" class="button">Mostrar video</a>
						</header>
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