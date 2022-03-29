<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generos cinematográfico</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="{{route('index')}}" id="logo">Los Generos <em>del Cine</em></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="{{route('index')}}">Inicio</a></li>
								<li><a href="{{route('video')}}">Video</a></li>
								<li><a href="">API</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-narrower">
								<div id="sidebar">

									<!-- Sidebar -->

										<section>
											<h2>Tipos de Cine</h2>
											@foreach($cine as $cines)
											<h3>{{$cines['nombre']}}</h3>
											<p><b>Concepto</b> <br> {{$cines['descripcion']}}</p>
											<img src="{{$cines['imagen']}}" alt="" style="max-width: 100%;"><br><br>
											@endforeach
										</section>

								</div>
							</div>
							<div class="col-8  col-12-narrower imp-narrower">
								<div id="content">

									<!-- Content -->
									
										<article class="title">
											
											<h1>Generos de Cine Cinematografico</h1>
											<p>El género cinematográfico es el tema general de una película que sirve para su clasificación.</p>

										@foreach($tipo as $tipoPelis)
											<header>
												<h2>{{$tipoPelis['nombre']}}</h2>
											</header>

											<span class="image featured"><img src="{{$tipoPelis['imagen']}}" alt="" /></span>


											<h3>Descripcion</h3>
											<p>{{$tipoPelis['descripcion']}}</p>

											@endforeach
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