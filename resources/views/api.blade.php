<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>API para calcular edad</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="index.html" id="logo">API <em>adivina tu edad</em></a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
                                <li><a href="{{route('index')}}">Inicio</a></li>
								<li><a href="{{route('video')}}">Video</a></li>
								<li class="current"><a href="{{route('api')}}">API</a></li>
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
										<h2>agify.io</h2>
										<p>Agify.io predice la edad de una persona a partir de su nombre.</p>
									</header>


									<p><br><b>"ADVERTENCIA: PUEDE QUE TE DIGA ANCIANO"</b></p>

                                    <div class="row">
                                        <section class="col-6 col-12-narrower">
                                            <h3>Ingrese su nombre</h3>
                                                <div class="row gtr-50">
                                                    <div class="col-6 col-12-mobilep">
                                                        <input type="text" name="name" id="nombre" placeholder="Nombre" />
                                                    </div>
                                                    <div class="col-12">
                                                        <ul class="actions">
                                                            <li><button type="submit" id="btn" class="button alt" value="Probar" >Probar</button></li>
                                                        </ul>
                                                    </div>

													<div class="col-10 col-12-mobilep" id="datos">
                                                    </div>
                                                </div>
                                        </section>
                                    </div>
								</article>

						</div>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
					</div>

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

			<script>
				var datos = document.getElementById('datos')
				document.getElementById('btn').addEventListener('click',predecir);
				let name = document.getElementById('nombre');
				
				function predecir(){
						let name = nombre.value;

						fetch('https://api.agify.io?name='+name,{ method:'GET'})
						.then(function(response){return response.json();})
						.then(data => {
							datos.innerHTML = "Tu edad es: " + data.age + " y tienes relacion con " + data.count + " personas";
						})
					}
			</script>

	</body>
</html>