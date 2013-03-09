<?php
require_once 'colegio/negocio/BoletinNegocio.php';
$modelo = new BoletinNegocio();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_400.font.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_700.font.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/jcarousellite.js"></script>
<script type="text/javascript" src="js/script.js"></script>
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg{ behavior: url(js/PIE.htc); }
	</style>
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->
</head>
<body id="page1">
<div class="body1">
	<div class="body2">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
				<h1><a href="index.html" id="logo">Progress Business Company</a></h1>
				<nav>
					<ul id="menu">
						<li id="nav1" class="active"><a href="index.html">Inicio<span>¡Bienvenido!</span></a></li>
						<li id="nav2"><a href="News.html">Nosotros<span>Conócenos</span></a></li>
						<li id="nav3"><a href="Services.html">Promoción<span>Talentos</span></a></li>
						<li id="nav4"><a href="Products.html">Fotos<span>Eventos</span></a></li>
                        <li id="nav5"><a href="Intranet.html">Intranet<span>Sistema</span></a></li>
						<li id="nav6"><a href="Contacts.html">Contáctenos<span>Correo</span></a></li>
					</ul>
				</nav>
				</div>
				<div class="wrapper">
					<div class="slider">
					  <ul class="items">
						<li><img src="images/img1.jpg" alt=""></li>
						<li><img src="images/img2.jpg" alt=""></li>
						<li><img src="images/img3.jpg" alt=""></li>
						<li><img src="images/img4.jpg" alt=""></li>
					  </ul>
					</div>
				</div>
			</header><div class="ic">More Website Templates  at TemplateMonster.com!</div>
<!-- header end-->
		</div>
	</div>
	</div>
	<div class="body3">
		<div class="main">
<!-- content -->
			<article id="content">
				<div class="wrapper">
				  <section class="cols">
						<h3><span class="dropcap">A</span>Misión y <span>Visión</span></h3>
					  <p class="pad_bot1">Lo principales motivos para seguir progresando y dando una mejor educacion</p>
					  <a href="#" class="link1">Leer mas</a>
					</section>
				  <section class="cols pad_left1">
						<h3><span class="dropcap">B</span>Promocion <span></span></h3>
						<p class="pad_bot1">&nbsp;</p>
						<p class="pad_bot1">Las promociones respaldan la enseña que brindamos y su progreso en el dia a dia.</p>
						<a href="#" class="link1">Leer mas</a>
				  </section>
					<section class="cols pad_left1">
					  <h3><span class="dropcap">C</span>Fotos<span></span></h3>
						<p class="pad_bot1">&nbsp;</p>
						<p class="pad_bot1">Vea las fotografías de los eventos, talleres, clases de una gran institución</p>
						<a href="#" class="link1">Ver Fotos</a>
					</section>
				  <section class="cols pad_left1">
						<h3><span class="dropcap">D</span>Intranet<span></span></h3>
						<p class="pad_bot1">&nbsp;</p>
						<p class="pad_bot1">Ingresar al sistemas: de notas, asistencias, separatas, cursos, boletines y horario.	</p>					  <a href="#" class="link1">Ingresar al Sistema</a>
                  </section>
				</div>
				<div class="wrapper">
					<section class="col1">
						<h2 class="under"><?php
							$resultado = $negocio->obtener(1);
							while($row = mysql_fetch_array($resultado)) {
							print $row['id_boletin'];}?></h2>
						<div class="wrapper">
							<p>
							  <figure class="left marg_right1"><img src="images/page1_img1.jpg" alt=""></figure>
							Informacion que se mostrara de una base de datos....</p>
							<p>Mas adelante habra mas informacion de esta.</p>
							<p>Institución Educativa con sistema Pre Universitario, ubicado en la Av. Los Rosales N° 789 - Urb. Valdiviezo - Ate. Teléfono 326 - 2986. E-mail: cpu_omq@hotmail.com. Nuestro lema: "Calidad - seriedad - Eficiencia". R.D. 3071-98-UGEL06
						  </p>
							<p>&nbsp;</p>
						</div>
					</section>
					<section class="col2 pad_left1">
						<h2>Frases:</h2>
						<div class="testimonials">
						<div id="testimonials">
						  <ul>
							<li>
								<div>
									“Lo grande de la enseñanza es ver progresar a tus alumnos.”
								</div>
								<span><strong class="color1">Antonio Torres,</strong> <br>
								Director</span>
							</li>
							<li>
								<div>
									“Porque un alumno merece aprender con los mejores.”
								</div>
								<span><strong class="color1">Antonio Torres,</strong> <br>
								Director</span>
							</li>
							<li>
								<div>
									“Valoramos el deporte, el arte y el teatro.”
								</div>
								<span><strong class="color1">Gustavo Torres,</strong> <br>
								Profesor</span>
							</li>
						  </ul>
						</div>
						<a href="#" class="up"></a>
						<a href="#" class="down"></a>
						</div>
					</section>
				</div>
			</article>
		</div>
	</div>
	<div class="body4">
		<div class="main">
			<article id="content2">
				<div class="wrapper">
					<section class="col3">
						<h4>¿Por qué nosotros?</h4>
						<ul class="list1">
							<li><a href="#">Calidad</a></li>
							<li><a href="#">Seriedad</a></li>
							<li><a href="#">Eficiencia </a></li>
							<li><a href="#">Somos los primeros</a></li>
						</ul>
					</section>
					<section class="col3 pad_left2">
						<h4>Dirección</h4>
						<ul class="address">
							<li><span>Ciudad:</span>Lima</li>
							<li><span>Distrito:</span>ATE</li>
							<li><span>Phone:</span>326 - 2986</li>
							<li><span>Email:</span><a href="mailto:">cpu_omq@hotmail.com</a></li>
						</ul>
					</section>
					<section class="col3 pad_left2">
						<h4>Síguenos</h4>
						<ul id="icons">
							<li><a href="https://www.facebook.com/iep.quesada"><img src="images/icon1.jpg" alt="">Facebook</a></li>
							<li><a href="#"><img src="images/icon2.jpg" alt="">Twitter</a></li>
							<li><a href="#"><img src="images/icon3.jpg" alt="">LinkedIn</a></li>
							<li><a href="http://oscarmiroquesada.blogspot.com"><img src="images/icon4.png" alt="">Blogspot</a></li>
						</ul>
					</section>
					<section class="col2 right">
						<h4>Busqueda Google</h4>
						<form id="newsletter" method="post">
							<div>
								<div class="wrapper">
									<input class="input" type="text" value="Busqueda"  onblur="if(this.value=='') this.value='Type Your Email Here'" onfocus="if(this.value =='Type Your Email Here' ) this.value=''" >
								</div>
								<a href="#" class="button" onclick="document.getElementById('newsletter').submit()">Buscar</a>
							</div>
						</form>
					</section>
				</div>
			</article>
<!-- content end -->
		</div>
	</div>
		<div class="main">
<!-- footer -->
			<footer>
				<a rel="nofollow" href="http://www.templatemonster.com/" target="_blank">Website Template</a> by TemplateMonster.com<br>
				<a href="http://www.templates.com/product/3d-models/" target="_blank">3D Models</a> provided by Templates.com
			</footer>
<!-- footer end -->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
						<?php
							$resultado = $negocio->obtener("1");
							while($row = mysql_fetch_array($resultado)) {
							print $row['id_boletin'];}?>
						