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
					<p>Con el <strong>Estándar de Contrataciones Abiertas</strong>, ahora los contratos públicos se liberarán desde la etapa de planeación hasta su ejecución, permitiéndote dar seguimiento al gasto de fondos públicos y mejorar la prestación de servicios.</p>
					<!-- stage nav-->
					<?php include "includes/contrataciones/stages_nav.php";?>
				</div>
				<div class="col-sm-6 pasos">
					
					<h2><svg version="1.1" id="planeacion2" xmlns="http://www.w3.org/2000/svg"
	 width="25px" height="25px" viewBox="0 0 25 25" >
<g>
	<path fill="#263333" d="M18.322,7.551h2.828c0.516,0,0.934-0.418,0.934-0.935V3.788c0-0.517-0.418-0.935-0.934-0.935h-2.828
		c-0.516,0-0.934,0.418-0.934,0.935v0.501h-3.66c-0.404,0-0.729,0.326-0.729,0.729v6.754h-1.386c-0.35-2.069-2.152-3.65-4.318-3.65
		c-2.414,0-4.379,1.965-4.379,4.379s1.965,4.379,4.379,4.379c2.166,0,3.969-1.58,4.318-3.648h1.386v6.752
		c0,0.404,0.325,0.73,0.729,0.73h3.66v0.5c0,0.516,0.418,0.934,0.934,0.934h2.828c0.516,0,0.934-0.418,0.934-0.934v-2.828
		c0-0.516-0.418-0.934-0.934-0.934h-2.828c-0.516,0-0.934,0.418-0.934,0.934v0.869h-2.93V13.23h2.93v0.684
		c0,0.516,0.418,0.936,0.934,0.936h2.828c0.516,0,0.934-0.42,0.934-0.936v-2.827c0-0.517-0.418-0.935-0.934-0.935h-2.828
		c-0.516,0-0.934,0.418-0.934,0.935v0.685h-2.93V5.748h2.93v0.868C17.389,7.133,17.807,7.551,18.322,7.551L18.322,7.551z
		 M7.745,12.502c0,0.246-0.201,0.448-0.449,0.448H5.707c-0.246,0-0.448-0.202-0.448-0.448c0-0.248,0.202-0.449,0.448-0.449h1.14
		v-1.91c0-0.247,0.201-0.448,0.449-0.448s0.449,0.201,0.449,0.448V12.502z M7.745,12.502"/>
</g>
</svg>
Planeación</h2>
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
				<div class="col-sm-8 col-sm-offset-2">
					<h1>Con las <span>Contrataciones Abiertas</span> de la CD<strong>MX</strong> 
						<span>ganamos todos y todas.</span></h1>
				</div>
				<div class="col-sm-12 quote">
					<p>“Solamente con instrumentos así y con leyes efectivas podemos cambiar esta historia. Para que exista corrupción tiene que haber dos partes. No se trata solo del servidor público, sino también de quien encuentra la oportunidad de vulnerar una disposición legal.” <strong>Miguel Ángel Mancera, <span>Jefe de Gobierno del D.F.</span></strong></p>
				</div>	
				<div class="col-sm-4">
					<div class="forthewin">
						<?php echo file_get_contents("img/servidor_publico.svg"); ?>
					</div>
					<h3>Servidores Públicos</h3>
					<p>Mayor cercanía con los ciudadanos</p>
				</div>
				<div class="col-sm-4">
					<div class="forthewin">
						<?php echo file_get_contents("img/empresario.svg"); ?>
					</div>
					<h3>Empresarios</h3>
					<p>Aumento en la competencia por los contratos</p>
				</div>
				<div class="col-sm-4">
					<div class="forthewin">
						<?php echo file_get_contents("img/ciudadanos.svg"); ?>
					</div>
					<h3>Ciudadanos</h3>
					<p>Mejores servicios de acuerdo a sus necesidades</p>
				</div>
			</div>
		</div>
	</section>
	
	<!--win-->
	<section class="tools">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h1>¿Qué más podrás hacer con  las <span>contrataciones abiertas</span>* de la CD<strong>MX</strong>?</h1>
				</div>
				<div class="col-sm-8 col-sm-offset-2 slide">
					<div class="row">
						<div class="col-sm-5">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="222.052px" height="152.775px" viewBox="0 0 222.052 152.775" enable-background="new 0 0 222.052 152.775"
	 xml:space="preserve">
<rect x="97.942" y="5.835" fill="#FFFFFF" width="118.981" height="140.796"/>
<rect x="6.327" y="5.835" fill="#FFFFFF" width="80.114" height="140.796"/>
<rect x="12.667" y="11.784" fill="#F4F4F4" width="68.162" height="128.896"/>
<rect x="104.283" y="11.784" fill="#F4F4F4" width="106.236" height="128.896"/>
<polygon fill="#E90A8A" points="210.52,140.68 104.283,140.68 104.283,39.439 121.373,79.817 147.817,23.414 187.069,70.506 
	210.52,39.439 "/>
<g>
	<g>
		<polyline fill="none" stroke="#9FA7AA" stroke-width="0.2841" stroke-miterlimit="10" points="17.983,128.847 15.558,128.847 
			15.558,23.414 17.983,23.414 		"/>
		<line fill="none" stroke="#9FA7AA" stroke-width="0.2841" stroke-miterlimit="10" x1="27.4" y1="128.847" x2="27.4" y2="23.414"/>
		
			<line fill="none" stroke="#9FA7AA" stroke-width="0.2841" stroke-miterlimit="10" x1="39.243" y1="128.847" x2="39.243" y2="23.414"/>
		
			<line fill="none" stroke="#9FA7AA" stroke-width="0.2841" stroke-miterlimit="10" x1="51.084" y1="128.847" x2="51.084" y2="23.414"/>
		
			<line fill="none" stroke="#9FA7AA" stroke-width="0.2841" stroke-miterlimit="10" x1="62.927" y1="128.847" x2="62.927" y2="23.414"/>
		
			<line fill="none" stroke="#9FA7AA" stroke-width="0.2841" stroke-miterlimit="10" x1="74.77" y1="128.847" x2="74.77" y2="23.414"/>
		<g>
			<g>
				
					<line fill="none" stroke="#9FA7AA" stroke-width="0.2198" stroke-miterlimit="10" x1="12.667" y1="80.862" x2="15.558" y2="80.862"/>
				
					<line fill="none" stroke="#9FA7AA" stroke-width="0.2198" stroke-miterlimit="10" x1="12.667" y1="70.506" x2="15.558" y2="70.506"/>
				
					<line fill="none" stroke="#9FA7AA" stroke-width="0.2198" stroke-miterlimit="10" x1="12.667" y1="60.151" x2="15.558" y2="60.151"/>
				
					<line fill="none" stroke="#9FA7AA" stroke-width="0.2198" stroke-miterlimit="10" x1="12.667" y1="49.794" x2="15.558" y2="49.794"/>
				
					<line fill="none" stroke="#9FA7AA" stroke-width="0.2198" stroke-miterlimit="10" x1="12.667" y1="39.439" x2="15.558" y2="39.439"/>
				
					<line fill="none" stroke="#9FA7AA" stroke-width="0.2198" stroke-miterlimit="10" x1="12.667" y1="29.083" x2="15.558" y2="29.083"/>
			</g>
		</g>
		<g>
			<g>
				
					<line fill="none" stroke="#9FA7AA" stroke-width="0.2198" stroke-miterlimit="10" x1="12.667" y1="121.63" x2="15.558" y2="121.63"/>
				
					<line fill="none" stroke="#9FA7AA" stroke-width="0.2198" stroke-miterlimit="10" x1="12.667" y1="111.274" x2="15.558" y2="111.274"/>
				
					<line fill="none" stroke="#9FA7AA" stroke-width="0.2198" stroke-miterlimit="10" x1="12.667" y1="100.918" x2="15.558" y2="100.918"/>
				
					<line fill="none" stroke="#9FA7AA" stroke-width="0.2198" stroke-miterlimit="10" x1="12.667" y1="90.562" x2="15.558" y2="90.562"/>
			</g>
		</g>
		<rect x="15.558" y="72.514" fill="#EF5C43" width="47.369" height="6.34"/>
		<rect x="15.558" y="72.514" fill="#F1D61C" width="59.212" height="6.34"/>
		<rect x="15.558" y="72.514" fill="#E90A8A" width="23.498" height="6.34"/>
		<rect x="15.558" y="62.159" fill="#F1D61C" width="59.212" height="6.34"/>
		<rect x="15.558" y="62.159" fill="#E90A8A" width="11.749" height="6.34"/>
		<rect x="15.558" y="51.802" fill="#EF5C43" width="52.293" height="6.341"/>
		<rect x="15.558" y="51.802" fill="#F1D61C" width="52.293" height="6.341"/>
		<rect x="15.558" y="51.802" fill="#E90A8A" width="47.369" height="6.341"/>
		<rect x="15.558" y="41.447" fill="#F1D61C" width="59.212" height="6.34"/>
		<rect x="15.558" y="41.447" fill="#E90A8A" width="35.526" height="6.34"/>
		<rect x="15.559" y="31.09" fill="#F1D61C" width="47.245" height="6.341"/>
		<rect x="15.558" y="31.09" fill="#E90A8A" width="11.749" height="6.341"/>
		<rect x="15.558" y="113.766" fill="#F1D61C" width="59.212" height="6.34"/>
		<rect x="15.559" y="113.766" fill="#E90A8A" width="31.19" height="6.34"/>
		<rect x="15.558" y="103.41" fill="#F1D61C" width="59.404" height="6.341"/>
		<rect x="15.558" y="103.41" fill="#F1D61C" width="52.293" height="6.341"/>
		<rect x="15.558" y="103.41" fill="#E90A8A" width="12.029" height="6.341"/>
		<rect x="15.558" y="93.054" fill="#EF5C43" width="59.118" height="6.34"/>
		<rect x="15.558" y="93.054" fill="#F1D61C" width="59.212" height="6.34"/>
		<rect x="15.558" y="93.054" fill="#E90A8A" width="35.526" height="6.34"/>
		<rect x="15.558" y="82.698" fill="#F1D61C" width="54.275" height="6.341"/>
		<rect x="15.558" y="82.698" fill="#F1D61C" width="24.058" height="6.341"/>
		<rect x="15.559" y="82.698" fill="#E90A8A" width="17.763" height="6.341"/>
	</g>
	<g>
		<text transform="matrix(0.8374 0 0 1 25.8618 133.4409)" fill="#9FA7AA" font-family="'Exo-Regular'" font-size="3.0773">10</text>
	</g>
	<g>
		<text transform="matrix(0.8374 0 0 1 37.7349 133.4409)" fill="#9FA7AA" font-family="'Exo-Regular'" font-size="3.0773">20</text>
	</g>
	<g>
		<text transform="matrix(0.8374 0 0 1 49.6079 133.4409)" fill="#9FA7AA" font-family="'Exo-Regular'" font-size="3.0773">30</text>
	</g>
	<g>
		<text transform="matrix(0.8374 0 0 1 61.481 133.4409)" fill="#9FA7AA" font-family="'Exo-Regular'" font-size="3.0773">40</text>
	</g>
	<g>
		<text transform="matrix(0.8374 0 0 1 73.354 133.4409)" fill="#9FA7AA" font-family="'Exo-Regular'" font-size="3.0773">50</text>
	</g>
</g>
</svg>
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