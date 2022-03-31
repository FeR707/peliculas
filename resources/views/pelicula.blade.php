<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Datos de Peliculas</title>
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
								<li><a href="{{route('index')}}">Inicio</a></li>
								<li><a href="{{route('video')}}">Video</a></li>
								<li><a href="{{route('api')}}">API</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-8 col-12-narrower">
								<div id="content">

									<!-- Content -->

										<article class="movie">
											<header>
												<h2>{{$pelicula['nombre']}}</h2>
												<p>Estrenada el {{$pelicula['fecha_estreno']}}</p>
											</header>

											<span class="image featured"><img src="{{$pelicula['imagen']}}" alt="" /></span>

											<p><em>Director: </em>{{$pelicula['direccion']}} </p>
											<p><em>Guion: </em>{{$pelicula['guion']}}</p> 
											<p><em>Pais: </em>{{$pelicula['pais']}}</p> 
											<p><em>Idioma Original: </em>{{$pelicula['idioma']}}</p>
											<p><em>Duacion: </em>{{$pelicula['duracion']}}</p>
											<p><em>Genero: </em>{{$pelicula->Tipo->nombre}} </p>
											<p><em>Tipo Cine: </em>{{$pelicula->Cine->nombre}}</p>

											<h3>Trama</h3>
											<p class="trama">{{$pelicula['sinopsis']}}</p>
										</article>

								</div>
							</div>
							<div class="col-4 col-12-narrower">
								<div id="sidebar">

									<!-- Sidebar -->

										<section>
											<h3>Genero Cinematografico</h3>
											<p>Que es un genero Cinematografico y como se clasifican</p>
											<footer>
												<a href="{{route('tipo')}}" class="button">Mas Generos</a>
											</footer>
										</section>

										<section>
											<h3>Otras Peliculas</h3>
											<ul class="links">
												<li><a href="{{route('datosPelicula', $nuevo['id'])}}">{{$nuevo['nombre']}}</a></li>
												<li><a href="{{route('datosPelicula', $nuevo2['id'])}}">{{$nuevo2['nombre']}}</a></li>
											</ul>
										</section>

								</div>
							</div>
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
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="#">HTML5 UP</a></li>
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