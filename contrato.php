<?php 	
	$body_class 	= "contract";
	$title 			= "Contrato";
	$description 	= "Contrato";
	$og_image		= "img/og/contrato-cdmx.png";
	$canonical		= $url;
	include "templates/header.php";?>
<div class="breadcrumb">
	<div class="container">
	</div>
</div>
<article>
			<div class="col-sm-3 sidebar">
				<div class="header">
					<h3>LICITACIÓN</h3>
					<h2>ADQUISICIÓN DE MATERIALES PARA OFICINA 003</h2>
				</div>
				<nav>
					<ul class="timeline">
						<li><a href="#" class="nav_stage current"><?php echo file_get_contents("img/nav_contratacion.svg"); ?>	</a>
							<ul>
								<li class="active"><a href="#" data-title="Hace 5 meses" class="t_right"></a></li>
								<li><a href="#" data-title="Hace 5 meses" class="t_left"></a></li>
							</ul>
						</li>
						<li><a href="#" class="nav_stage" data-title="Adjudicación"><?php echo file_get_contents("img/nav_adjudicacion.svg"); ?></a> 
							<ul>
								<li><a href="#" data-title="Hace 6 meses" class="t_right"></a></li>
								<li><a href="#" data-title="Hace 6 meses" class="t_left"></a></li>
							</ul>
						</li>
						<li><a href="#" class="nav_stage" data-title="Licitación"><?php echo file_get_contents("img/nav_licitacion.svg"); ?></a></li>
						<li><a href="#" class="nav_stage" data-title="Planeación"><?php echo file_get_contents("img/nav_planeacion.svg"); ?></a></li>
					</ul>
				</nav>
			</div>	
			
			<div class="col-sm-9 info">
				<!-- licitación-->
				<div id="licitacion">
					<div class="row divider">
						<div class="col-sm-12">
							<p class="title_section">Licitación</p>
							<h1>ADQUISICIÓN DE MATERIALES PARA OFICINA 003</h1>
							<h2>OCDS-87SD3T-SEFIN-30001105-003-2015 <span class="label complete">COMPLETO</span></h2>
							<p class="lead">PAPELERIA PARA EL ALMACÉN CENTRAL</p>
						</div>
					</div>
					<div class="row divider">
						<div class="col-sm-4">
							<p class="title_section">PRESUPUESTO (MXN)</p>
							<h2 class="amount"><b class="budget"></b><span>$</span>93,000</h2>
						</div>
						<div class="col-sm-4">
							<p class="title_section">Gastado (MXN)</p>
							<h2 class="amount"><b class="spent"></b><span>$</span>69,252</h2>
						</div>
						<div class="col-sm-4">
							<p class="title_section">% GASTADO</p>
							<div class="percent">
								<div class="budget" style="width: 70%"></div>
								<div class="spent"></div>
							</div>
							<p class="title_section"><span>0</span> <span class="right">100</span></p>
						</div>
					</div>
					<div class="row divider">
						<div class="col-sm-12">
							<p class="title_section">Línea de tiempo</p>
						</div>
					</div>
					<div class="row divider">
						<div class="col-sm-4">
							<p class="title_section">COMPRADOR</p>
							<p>SECRETARÍA DE FINANZAS </p>
						</div>
						<div class="col-sm-4">
							<p class="title_section">MÉTODO DE ADQUISICIONES</p>
							<p>ABIERTO</p>
						</div>
						<div class="col-sm-4">
							<p class="title_section">CRITERIOS DE ADJUDICACIÓN</p>
							<p>MEJOR OFERTA</p>
						</div>
					</div>
					
					<div class="row divider">
						<div class="col-sm-8">
							<p class="title_section">ARTÍCULOS</p>
							<ul>
								<li class="row">
									<span class="col-sm-9"> CARPETA C/PERCALINA T/OFICIO (VA.COLORES)</span>
									<span class="col-sm-3">400 PZA</span>
								</li>
								<li class="row">
									<span class="col-sm-9">BROCHE TRIUNFO No. 2 (MARIPOSA)</span>
									<span class="col-sm-3">1500 CS</span>
								</li>
								<li class="row">
									<span class="col-sm-9">BLOCK NOTAS AUTOADHERIBLES DE 3 X 3</span>
									<span class="col-sm-3">600 PZA</span>
								</li>
								
							</ul>
						</div>
						
						<div class="col-sm-4">
							<p class="title_section">DOCUMENTOS</p>
						</div> 
					</div>
					
					<div class="row">
						<div class="col-sm-4">
							<p class="title_section">LICITADORES que aplicaron</p>
							<h2 class="amount">2</h2>
							<ol>
								<li><a href="#">ABASTECEDORA ARAGONESA SA DE CV</a> - <a href="#" class="link_doc">Propuesta</a></li>
								<li><a href="#">CLAUDIA GABRIELA IÑIGUEZ OCHOA</a> - <a href="#" class="link_doc"> Propuesta</a></li>
							</ol>
						</div>
						<div class="col-sm-4">
							<p class="title_section">Adjudicaciones</p>
							<h2 class="amount">2</h2>
							<ol>
								<li><a href="#">ABASTECEDORA ARAGONESA SA DE CV</a></li>
								<li><a href="#">CLAUDIA GABRIELA IÑIGUEZ OCHOA</a></li>
							</ol>
						</div>
						<div class="col-sm-4">
							<p class="title_section">Contratos</p>
							<h2 class="amount">2</h2>
							<ol>
								<li><a href="#">CS-018-2015</a></li>
								<li><a href="#">CS-019-2015</a</li>
							</ol>
						</div> 
					</div>
					
				</div>
				
				
				<!-- contrato 1-->
				<div id="contrato-1" style="display: none">
				<div class="row divider">
					<div class="col-sm-12">
						<p class="title_section">Contrato</p>
						<h1>PAPELERIA PARA EL ALMACÈN CENTRAL. </h1>
						<h2>CS-019/2015 <span class="label active">ACTIVO</span></h2>
					</div>
				</div>
				<div class="row divider">
					<div class="col-sm-6">
						<h2 class="amount"><span>$</span> 23,304.40 <span>MXN</span></h2>
					</div>
					<div class="col-sm-6">
						<p class="title_section">PROVEEDOR</p>
						<p>ABASTECEDORA ARAGONESA SA DE CV</p>
					</div> 
				</div>
				<div class="row divider">
					<div class="col-sm-5">
						<p class="title_section">COMPRADOR</p>
						<p>SECRETARÍA DE FINANZAS </p>
					</div>
					<div class="col-sm-3">
						<p class="title_section">FECHA</p>
						<p>31/01/2015</p>
					</div>
					<div class="col-sm-4">
						<p class="title_section">PERÍODO</p>
					</div> 
				</div>
				
				<div class="row">
					<div class="col-sm-8">
						<p class="title_section">ARTÍCULOS</p>
						<ul>
							<li class="row">
								<span class="col-sm-9"> CARPETA C/PERCALINA T/OFICIO (VA.COLORES)</span>
								<span class="col-sm-3">400 PZA</span>
							</li>
							<li class="row">
								<span class="col-sm-9">BROCHE TRIUNFO No. 2 (MARIPOSA)</span>
								<span class="col-sm-3">1500 CS</span>
							</li>
							<li class="row">
								<span class="col-sm-9">BLOCK NOTAS AUTOADHERIBLES DE 3 X 3</span>
								<span class="col-sm-3">600 PZA</span>
							</li>
							
						</ul>
					</div>
					
					<div class="col-sm-4">
						<p class="title_section">DOCUMENTOS</p>
					</div> 
				</div>
				</div>
			</div>
			<div class="clearfix"></div>
</article>
	
	
<?php include "templates/footer.php";?>