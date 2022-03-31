<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Video explicacion</title>
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
								<li class="current"><a href="{{route('video')}}">Video</a></li>
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

										<article>
											<header>
												<h2>Explicacion de como se creo la pagina de PeliHistoria</h2>
											</header>

											<div class="video-responsive">
											<iframe width="560" height="315" src="https://www.youtube.com/embed/YnbWZ5Tt4Fw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div><br><br>


											<h3>Pasos para la creacion y llenado de la base de datos</h3>
											<p>Para la creacion de la las tablas se necesita una migracion y un modelo para ello ejecutamos el siguiente comando "php artisan make:model Nombre -m" 
												con esto se creara la migracion y el modelo, en la migracion debemos especificar los parametros de la tabla y mandarlo a llamar en su modelo con "protected $table = 'nombre';"
												y luego ejecutamos "php artisan migrate", con esto ya creamos las tablas de nuestra base de datos.
											</p>

											<p>Para llenarlo se necesita un seeder, lo creamos usando el comando "php artisan make:seed nombre" aqui 
												podemos llenar las tablas que creamos una vez hecho eso nos vamos a DatabaseSeeder y mandamos a llamar 
												nuestro seeder "$this->call(NombreSeeder::class);" y luego se ejecuta "php artisan db:seed" para subirlo a la base de datos.
											</p>
										</article>

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