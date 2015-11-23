	<?php 	
	$body_class 	= "home";
	$title 			= "Contrataciones Abiertas de la Ciudad de México";
	$description 	= "Presupuesto de Egresos de la Federación PROYECTO 2016";
	$og_image		= "img/og/contrataciones-abiertas-cdmx.png";
	$canonical		= $url;
	include "templates/header.php";?>
	<!--participación-->
	<section class="participacion">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1><span>Tu participación</span> en las <span class="mx">contrataciones</span> de la 
					CD<span class="mx">MX</span> <span>ayuda</span> a <span>combatir</span> <strong>la corrupción.</strong>
					</h1>
					<a href="#" class="btn cta">¿Cómo participar?</a>
				</div>
			</div>
		</div>
	</section>
	
	<!--etapas-->
	<section class="etapas">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1>La <span>CD</span><strong>MX</strong> es la <span>primer ciudad del mundo</span> en implementar el 
						<a href="http://standard.open-contracting.org/?lang=es">Estándar de Contrataciones Abiertas</a></h1>
					
					<div id="mini-description-a" style="opacity:0">Con el <strong>Estándar de Contrataciones Abiertas</strong>, ahora los contratos públicos se 
					liberarán desde la etapa de planeación hasta su ejecución, permitiéndote dar seguimiento al 
					gasto de fondos públicos y mejorar la prestación de servicios.</div>

					<!-- stage nav-->
					<?php include "includes/contrataciones/stages_nav.php";?>
				</div>
				<div class="col-sm-6 pasos">
					
					<h2> <b class="i_planeacion"></b> Planeación</h2>
					<!-- plenación-->
					<div class="planeacion">
						<?php include "includes/contrataciones/stages-planeacion.php";?>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--win-->
	<section class="win">
		<div class="container">
			<div class="row">
				<?php include "includes/contrataciones/win.php";?>
			</div>
		</div>
	</section>
	
	<!--tools-->
	<section class="tools">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h1>¿Qué más podrás hacer con  las <span>contrataciones abiertas</span>* de la CD<strong>MX</strong>?</h1>
				</div>
				<div class="col-sm-8 col-sm-offset-2 slide">
					<div class="row">
						<div class="col-sm-5">
						<?php echo file_get_contents("img/dataviz.svg"); ?>	
						</div>
						<div class="col-sm-7">
							<h2>Visualizar Datos</h2>
							<p>Observa en qué productos o servicios gasta más el gobierno.</p>
							<ul>
								<li><a href="#">Datos</a></li>
								<li><a href="#">api</a></li>
								<li><a href="#">sm</a></li>
							</ul>
						</div>
					</div>
				</div>	
				
				<div class="col-sm-12">
					<a href="#" class="btn">Descubre como  usar los datos</a>
				</div>
				<div class="col-sm-4 col-sm-offset-8">
					<p><small>* En la primera fase del proyecto el sitio solo contará con contrataciones de SEFIN, correspondientes a noviembre de 2015</small></p>
				</div>
			</div>
		</div>
	</section>
<?php include "templates/footer.php";?>