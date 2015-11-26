	<?php 	
	$body_class 	= "datos";
	$title 			= "Cómo usar los datos de las Contrataciones Abiertas de la Ciudad de México";
	$description 	= "Un estándar de datos para las contrataciones públicas de la CDMX";
	$og_image		= "img/og/datos-contrataciones-abiertas-cdmx.png";
	$canonical		= $url;
	include "templates/header.php";?>
	
	<!--datos-->
	<section class="lead datos">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-xs-10 col-sm-offset-0 col-xs-offset-1">
					<h1>
						Un <span>estándar de datos</span> para las <span>contrataciones públicas</span> 
						de la <span>CD</span><strong>MX</strong>
					</h1>
					<a href="#" class="btn cta">¿Cómo usarlo?</a>
				</div>
			</div>
		</div>
	</section>
	
	<!--usa los datos-->
	<section class="etapas">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1>¿Cómo utilizar los datos?</h1>
					<p>El uso de un Estándar de Datos para las Contrataciones Abiertas ayudará a reducir la corrupción en el proceso de contratación, permitiendo a los gobiernos conseguir una mejor rentabilidad de sus inversiones y asegurar la producción de bienes y servicios de alta calidad para los ciudadanos.
					</p>
					
					<!-- usar nav-->
					<ul>
						<li><a href="#">Listar contratos</a></li>
						<li><a href="#">Catálogo de Dependencias</a></li>
						<li><a href="#">Catálogo de Proveedores</a></li>
						<li><a href="#">Contrato</a></li>
					</ul>
					<a href="#" class="btn">Más info sobre el estándar</a>
				</div>
				<div class="col-sm-6 pasos">
					<h2>Listar contratos</h2>
					<p>Genera archivo JSON con la lista de contratos para una dependencia.

Url: ocpcdmx/cdependencias
Firma de entrada: 
{
"dependencia" : "901", }
Respuesta:
[
{"ocdsID": "OCDS-87SD3T-CONVENIO-0002-2015", "ejercicio": "2015",
"cveDependencia": "901",
"nomDependencia": "SECRETARÍA DE FINANZAS”
}, 
{ "ocdsID": "OCDS-87SD3T-OM-30001101-0001-2015", "ejercicio": "2015",
"cveDependencia": "901",
"nomDependencia": "SECRETARÍA DE FINANZAS"
} ]
Método: POST
					</p>
				</div>
			</div>
		</div>
	</section>

	
<?php include "templates/footer.php";?>