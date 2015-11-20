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
						<svg version="1.1" id="ciudadano" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="57.138px" height="159px" viewBox="4.301 0 57.138 159" enable-background="new 4.301 0 57.138 159" xml:space="preserve">
<g>
	<path fill="#C9AA85" d="M54.417,30.748c0.03,12.606-10.067,22.854-22.557,22.886C19.378,53.665,9.231,43.465,9.2,30.859
		C9.17,18.251,19.266,8.003,31.748,7.973C44.238,7.942,54.387,18.141,54.417,30.748z"/>
	<path fill="#523F32" d="M26.635,31.814c0.002,1.074-0.524,1.949-1.18,1.951c-0.65,0-1.179-0.871-1.181-1.945
		c-0.003-1.074,0.521-1.947,1.171-1.947C26.101,29.871,26.632,30.74,26.635,31.814z"/>
	<path fill="#523F32" d="M41.549,31.814c0.003,1.074-0.523,1.949-1.179,1.951c-0.65,0.002-1.18-0.871-1.183-1.945
		c-0.002-1.074,0.522-1.945,1.173-1.947C41.016,29.871,41.547,30.74,41.549,31.814z"/>
	<path fill="#B2967B" d="M34.311,38.344c0,0-0.691-0.621-1.703-0.619c-0.975,0.002-1.724,0.627-1.724,0.627s0.347-1.562,1.721-1.565
		C33.977,36.783,34.311,38.344,34.311,38.344z"/>
	<circle fill="#C9AA85" cx="10.254" cy="34.713" r="3.393"/>
	<circle fill="#C9AA85" cx="54.033" cy="34.622" r="3.393"/>
	<path fill="#AF1F31" d="M51.437,80.049c-0.715-3.484-4.621-13.47-7.578-17.58c-0.037-0.053-0.086-0.086-0.129-0.131
		c-0.363-0.426-0.842-0.818-1.488-1.154c-4.753-2.467-18.487-2.822-21.444,1.285c-2.956,4.109-6.862,14.096-7.578,17.58
		c-0.715,3.482-1.228,17.854-1.228,17.854h3.379c0,0,0.937-14.729,1.64-17.854c0.702-3.126,5.064-10.927,5.064-10.927l0.982,30.058
		l18.392,0.199l1.516-29.562c1.075,1.973,4.106,7.67,4.683,10.232c0.702,3.125,1.64,17.854,1.64,17.854h3.379
		C52.665,97.902,52.152,83.531,51.437,80.049z"/>
	<polygon fill="#0C193E" points="23.038,98.658 23.83,109.951 40.11,109.951 41.483,98.736 	"/>
	<polygon fill="#0C193E" points="23.83,107.691 26.064,152.014 30.214,152.014 30.853,107.691 	"/>
	<polygon fill="#0C193E" points="40.319,107.691 38.085,152.014 33.935,152.014 33.296,107.691 	"/>
	<polygon fill="#502212" points="33.935,152.014 33.959,157.92 35.684,157.92 35.684,156.643 37.759,157.92 45.101,157.92 
		38.085,152.014 	"/>
	<polygon fill="#502212" points="30.165,152.014 30.141,157.92 28.416,157.92 28.416,156.643 26.341,157.92 18.999,157.92 
		26.015,152.014 	"/>
	<path fill="#C9AA85" d="M11.38,99.18c-0.198,1.738-0.1,3.248,0,4.791c0.101,1.541,1.512,1.809,2.15,0.211
		c0.638-1.596,0.403-3.404,0.403-3.404s0.639,2.646,1.437,1.404c0.798-1.244,0.084-5.557,0.084-5.557l-3.407-0.148
		C12.047,96.477,11.578,97.439,11.38,99.18z"/>
	<path fill="#C9AA85" d="M53.296,99.18c0.198,1.738,0.1,3.248,0,4.791c-0.101,1.541-1.512,1.809-2.15,0.211
		c-0.638-1.596-0.403-3.404-0.403-3.404s-0.639,2.646-1.437,1.404c-0.798-1.244-0.084-5.557-0.084-5.557l3.407-0.148
		C52.629,96.477,53.098,97.439,53.296,99.18z"/>
	<rect x="29.302" y="59.596" fill="#CC2032" width="6.299" height="38.978"/>
	<path fill="#272421" d="M40.368,2.672C40.368,2.673,40.368,2.673,40.368,2.672C25.832-2.23,14.773,5.408,12.058,9.105
		c-2.915,3.963-7.046,17.374-0.611,22.713c0,0,17.601-9.346,19.318-14.05c-0.174,4.261,0,8.081,0,8.081s5.439-4.604,9.271-10.443
		C43.987,17.71,50.204,28.046,51.06,36.65C55.863,30.628,58.981,6.685,40.368,2.672z"/>
	<path fill="#E76565" d="M27.367,42.594c0,0,2.119,1.895,5.201,1.887c2.972-0.006,5.26-1.912,5.26-1.912s-1.063,4.766-5.253,4.775
		C28.383,47.354,27.367,42.594,27.367,42.594z"/>
	<path fill="#C9AA85" d="M36.017,61.263c0,0-0.123,1.833-3.419,1.833s-3.42-1.833-3.42-1.833V50.934h6.839V61.263z"/>
</g>
</svg>
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