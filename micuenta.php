<html>
<meta charset="UTF-8">
<title>Menu Desplegable</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav {
				width:500px; /*Le establecemos un ancho*/
				margin:0 auto; /*Centramos automaticamente*/
			}
 
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
	</head>
	<body>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<a href="logout.php">Cerrar Sesión</a>

		<div id="header">
			<nav> <!-- Aqui estamos iniciando la nueva etiqueta nav -->
				<ul class="nav">
					<li><a href="">Inicio</a></li>
					<li><a href="">Servicios</a>
						<ul>
							<li><a href="registro.php">Registro de Trabajor</a></li>
							<li><a href="">Edicion de Datos</a></li>
							
							<li><a href="">Planillas </a>
								
							</li>
						</ul>
					</li>
					<li><a href="">Ayuda</a>
						<ul>
							
						</ul>
					</li>
					<li><a href="">Contacto</a></li>
				</ul>
			</nav><!-- Aqui estamos cerrando la nueva etiqueta nav -->
		</div>
	</body>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<a href="logout.php">Cerrar Sesión</a>

</body>
</html>