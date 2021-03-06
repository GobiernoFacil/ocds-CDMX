<?php 

  /*
  * 
  * LOAD THE DATA 
  */	

  $url  = 'http://187.141.34.209:9009/ocpcdmx/listarcontratos';
  $data = array('dependencia' => '901', "ejercicio" => 2014);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);
die();

  /*
  *
  */
	$body_class 	= "contract";
	$title 			= "Contrato";
	$description 	= "Contrato";
	$og_image		= "img/og/contrato-cdmx.png";
	$canonical		= $url;
	include "templates/header.php";?>
<div class="breadcrumb">
	<div class="container">
		<a href="#"><strong>&lt;</strong> SEFIN</a>
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
						<li><a href="#"  id="btn-contract-nav" class="nav_stage current" data-title="Contratación">
							<?php echo file_get_contents("img/nav_contratacion.svg"); ?>	</a>
							<ul id="nav_contract">
								<li class="active"><a id="btn-contract-1" href="#" data-title="Hace 5 meses" class="t_right"></a></li>
								<li><a id="btn-contract-2" href="#" data-title="Hace 5 meses" class="t_left"></a></li>
							</ul>
						</li>
						<li><a href="#" id="btn-award-nav" class="nav_stage" data-title="Adjudicación"><?php echo file_get_contents("img/nav_adjudicacion.svg"); ?></a> 
							<ul id="nav_award">
								<li><a id="btn-award-1" href="#" data-title="Hace 6 meses" class="t_right"></a></li>
								<li><a id="btn-award-2" href="#" data-title="Hace 6 meses" class="t_left"></a></li>
							</ul>
						</li>
						<li><a href="#" id="btn-tender" class="nav_stage" data-title="Licitación"><?php echo file_get_contents("img/nav_licitacion.svg"); ?></a></li>
						<li><a href="#" id="btn-planning"class="nav_stage" data-title="Planeación"><?php echo file_get_contents("img/nav_planeacion.svg"); ?></a></li>
					</ul>
				</nav>
			</div>	
			
			<div class="col-sm-9 info">
				<!-- tender-->
				<div id="tender">
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
								<li><a href="#">CS-019-2015</a></li>
							</ol>
						</div> 
					</div>
					
				</div>
				
				<!--awards-->
				<div id="award-1">
					<div class="row divider">
						<div class="col-sm-12">
							<p class="title_section">Adjudicación</p>
							<h1>PRUEBA 2 CALIDAD</h1>
							<h2>ID: 1 <span class="label active">ACTIVO</span></h2>
						</div>
					</div>
					
					<div class="row divider">
						<div class="col-sm-6">
							<p class="title_section">Descripción</p>
							<p>PAPELERIA SEFIN 2</p>
						</div>
						<div class="col-sm-6">
							<h2 class="amount"><span>$</span> 23,304.40 <span>MXN</span></h2>
						</div>
					</div>
					
					<div class="row divider">
						<div class="col-sm-6">
							<p class="title_section">Proveedor</p>
							<p><a href="#">ABASTECEDORA ARAGONESA SA DE CV</a></p>
						</div>
						<div class="col-sm-6">
							<p class="title_section">Fecha</p>
							<p>30-01-2015</p>
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
							</ul>
						</div>
						
						<div class="col-sm-4">
							<p class="title_section">DOCUMENTOS</p>
						</div>
					</div>
				</div>
			 
				
				<div id="award-2">
					<div class="row divider">
						<div class="col-sm-12">
							<p class="title_section">Adjudicación</p>
							<h1>PRUEBA 3 CALIDAD</h1>
							<h2>ID: 2 <span class="label active">ACTIVO</span></h2>
						</div>
					</div>
					
					<div class="row divider">
						<div class="col-sm-6">
							<p class="title_section">Descripción</p>
							<p>PAPELERIA SEFIN 2</p>
						</div>
						<div class="col-sm-6">
							<h2 class="amount"><span>$</span> 13,356.90 <span>MXN</span></h2>
						</div>
					</div>
					
					<div class="row divider">
						<div class="col-sm-6">
							<p class="title_section">Proveedor</p>
							<p><a href="#">CLAUDIA GABRIELA IÑIGUEZ OCHOA</a></p>
						</div>
						<div class="col-sm-6">
							<p class="title_section">Fecha</p>
							<p>30-01-2015</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-8">
							<p class="title_section">ARTÍCULOS</p>
							<ul>
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
				
				<!-- contratos-->
				<div id="contract-1">
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
				
				<div id="contract-2">
				<div class="row divider">
					<div class="col-sm-12">
						<p class="title_section">Contrato</p>
						<h1>PAPELERIA PARA EL ALMACÈN CENTRAL. </h1>
						<h2>CS-018/2015 <span class="label active">ACTIVO</span></h2>
					</div>
				</div>
				<div class="row divider">
					<div class="col-sm-6">
						<h2 class="amount"><span>$</span>13,356.90 <span>MXN</span></h2>
					</div>
					<div class="col-sm-6">
						<p class="title_section">PROVEEDOR</p>
						<p>CLAUDIA GABRIELA IÑIGUEZ OCHOA</p>
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
				
				<!-- planning-->
				<div id="planning">
					<div class="row divider">
						<div class="col-sm-12">
							<p class="title_section">Planeación</p>
							<h1>suficiencia presupuestal 005</h1>
							<h2>OCDS-87SD3T-SEFIN-30001105-005-2015 <span class="label complete">COMPLETO</span></h2>
						</div>
					</div>
					<div class="row divider">
						<div class="col-sm-6">
							<p class="title_section">PRESUPUESTO (MXN)</p>
							<h2 class="amount"><span>$</span>92,000</h2>
						</div>
						<div class="col-sm-6">
							<p class="title_section">Fecha</p>
							<p>01-01-2015
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<p class="title_section">COMPRADOR</p>
							<p><a href="#">SECRETARÍA DE FINANZAS</a></p>
						</div>
					</div>
				</div>
				
			</div>
			<div class="clearfix"></div>
</article>

<script type="text/javascript" src="js/bower_components/jquery/dist/jquery.min.js"></script>
<script>
$( document ).ready(function() {
	
	var tender 	  	= $("#tender"),
		planning	= $("#planning"),
		contract1 	= $("#contract-1"),
		contract2 	= $("#contract-2"),
		award1 		= $("#award-1"),
		award2 		= $("#award-2"),
		timeline	= $(".timeline li"),
		//subnav
		nav_contract = $("#nav_contract"),
		nav_award 	 = $("#nav_award"),
		///btn
		btn_contract_nav = $("#btn-contract-nav"),
		btn_contract1 	 = $("#btn-contract-1"),
		btn_contract2 	 = $("#btn-contract-2"),
		btn_award_nav	 = $("#btn-award-nav"),
		btn_award1 	 	 = $("#btn-award-1"),
		btn_award2 	 	 = $("#btn-award-2"),
		btn_planning	 = $("#btn-planning"),
		btn_tender	  	 = $("#btn-tender");
	
	///hide
	tender.hide();
	planning.hide();
	award1.hide();
	award2.hide();
	contract2.hide();
	nav_award.hide();
	
	
	function changeClass(element) {
		timeline.removeClass("active");
		timeline.children("a").removeClass("current");
		$(element).parent("li").addClass("active");
		$(element).addClass("current");
	};
	
	//// btns
	btn_contract_nav.on("click", function (){
		event.preventDefault();
		timeline.removeClass("active");
		timeline.children("a").removeClass("current");
		$(this).addClass("current");		
		nav_contract.children("li:first-child").addClass("active");
		//hide
		tender.hide();
		planning.hide();
		award1.hide();
		award2.hide();
		nav_award.hide();
		contract2.hide();
		//show
		nav_contract.show();
		contract1.show();
	});
	btn_contract1.on("click", function (){
		event.preventDefault();
		changeClass(this);
		$(this).addClass("active");
		btn_contract_nav.addClass("current")
		//hide
		tender.hide();
		planning.hide();
		award1.hide();
		award2.hide();
		contract2.hide();
		nav_award.hide();
		//show
		nav_contract.show();
		contract1.show();
	});
	btn_contract2.on("click", function (){
		event.preventDefault();
		changeClass(this);
		$(this).addClass("active");
		btn_contract_nav.addClass("current")
		//hide
		tender.hide();
		planning.hide();
		award1.hide();
		award2.hide();
		contract1.hide();
		nav_award.hide();
		//show
		nav_contract.show();
		contract2.show();
	});
	
	///btn awards
	btn_award_nav.on("click", function (){
		event.preventDefault();
		timeline.removeClass("active");
		timeline.children("a").removeClass("current");
		$(this).addClass("current");		
		nav_award.children("li:first-child").addClass("active");
		//hide
		tender.hide();
		planning.hide();
		award2.hide();
		contract1.hide();
		contract2.hide();
		nav_contract.hide();
		//show
		nav_award.show();
		award1.show();
	});
	btn_award1.on("click", function (){
		event.preventDefault();
		changeClass(this);
		$(this).addClass("active");
		btn_award_nav.addClass("current")
		//hide
		tender.hide();
		planning.hide();
		award2.hide();
		contract1.hide();
		contract2.hide();
		nav_contract.hide();
		//show
		nav_award.show();
		award1.show();
	});
	btn_award2.on("click", function (){
		event.preventDefault();
		changeClass(this);
		$(this).addClass("active");
		btn_award_nav.addClass("current")
		//hide
		tender.hide();
		planning.hide();
		award1.hide();
		contract1.hide();
		contract2.hide();
		nav_contract.hide();
		//show
		nav_award.show();
		award2.show();
	});
	
	///btn tender
	btn_tender.on("click", function (){
		event.preventDefault();
		changeClass(this);
		//hide
		contract1.hide();
		planning.hide();
		contract2.hide();
		nav_contract.hide();
		award1.hide();
		award2.hide();
		nav_award.hide();
		//show
		tender.show();
	});
	
	///btn planning
	btn_planning.on("click", function (){
		event.preventDefault();
		changeClass(this);
		//hide
		tender.hide();
		contract1.hide();
		contract2.hide();
		nav_contract.hide();
		award1.hide();
		award2.hide();
		nav_award.hide();
		//show
		planning.show();
	});
    
});
</script>
	
<?php include "templates/footer.php";?>