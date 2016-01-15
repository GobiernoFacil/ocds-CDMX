	<?php 	
	$body_class 	= "home2";
	$title 			= "Contrataciones Abiertas de la Ciudad de México";
	$description 	= "Contrataciones Abiertas de la Ciudad de México";
	$og_image		= "img/og/contrataciones-abiertas-cdmx.png";
	$canonical		= $url;
	include "templates/header.php";?>
	
<div class="breadcrumb">
	<div class="container">
		<nav>
  <a href="#" id="dependencia-a">Dependencia A</a>
  <a href="#" id="dependencia-a">Dependencia B</a>
</nav>
	</div>
</div>




<div class="viz_home">
	<p id="publisher-name"></p>
	<p id="contratos-total-num"></p>
	<p id="contratos-total-money"></p>
	
	<div id="treempap"></div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h3>Contratos</h3>
			<ul class="list">
				<li class="row">
					<div class="col-sm-9 top">
						<h2><a href="contrato.php">PAPELERIA PARA EL ALMACÈN CENTRAL. <span>CS-019/2015</span></a></h2>
					</div>
					<div class="col-sm-3 amount top">
						<p><span>$</span> 46608.8 <span>MXN</span></p>
					</div>
					<div class="clearfix"></div>
					<div class="icons">
						<div class="col-sm-4">
							<p>Comprador: <a href="#">SEFIN</a></p>
						</div>
						<div class="col-sm-4">
							<p>Proveedor: <a href="#">CLAUDIA GABRIELA IÑIGUEZ OCHOA</a></p>
						</div>
						<div class="col-sm-4">
							<ul>
								<li>Activo</li>
								<li>3</li>
								<li>10 meses</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</li>
				<li class="row">
					<div class="col-sm-9 top">
						<h2><a href="contrato.php">PAPELERIA PARA EL ALMACÈN CENTRAL. <span>CS-019/2015</span></a></h2>
					</div>
					<div class="col-sm-3 amount top">
						<p><span>$</span> 46608.8 <span>MXN</span></p>
					</div>
					<div class="clearfix"></div>
					<div class="icons">
						<div class="col-sm-4">
							<p>Comprador: <a href="#">SEFIN</a></p>
						</div>
						<div class="col-sm-4">
							<p>Proveedor: <a href="#">CLAUDIA GABRIELA IÑIGUEZ OCHOA</a></p>
						</div>
						<div class="col-sm-4">
							<ul>
								<li>Activo</li>
								<li>3</li>
								<li>10 meses</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>



<ul id="contratos-list"></ul>

<script data-main="/js/apps/provider/main" src="js/bower_components/requirejs/require.js"></script>
	<?php include "templates/footer.php";?>