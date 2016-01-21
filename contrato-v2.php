<?php
	/*
	* 
	* LOAD THE DATA 
	*/	

	date_default_timezone_set('America/Mexico_City');
	/* UGLY HACK */
	$d = array_diff(scandir("./js/data"), ['..', '.', '.DS_Store']);
	$contracts = [];
	foreach($d as $contract)
	{
		$f = file_get_contents("./js/data/" . $contract);
    	$j = json_decode($f);
		
    	$id = $j->releases[0]->ocid;
    	$contracts[str_replace("/", "-", $id)] = $j;       
  	}
 
  	$elcontrato = $contracts['OCDS-87SD3T-SEFIN-DRM-AD-CC-008-2015'];
  	
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
					<?php if ($elcontrato->releases[0]->tender):?>
					<h3>LICITACIÓN</h3>
					<h2><?php echo $elcontrato->releases[0]->tender->title;?></h2>
					<?php else:?>
					<h3>PLANEACIÓN</h3>
					<h2><?php echo $elcontrato->releases[0]->planning->budget->project;?></h2>
					<?php endif;?>
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
							<h1><?php echo $elcontrato->releases[0]->tender->title;?></h1>
							<h2><?php echo $elcontrato->releases[0]->tender->id;?> 
							<span class="label <?php echo $elcontrato->releases[0]->tender->status;?>">
							<?php echo $elcontrato->releases[0]->tender->status == "complete" ? 'COMPLETO' : '';?></span>
							</h2>
							<p class="lead"><?php echo $elcontrato->releases[0]->tender->description;?></p>
						</div>
					</div>
					<div class="row divider">
						<div class="col-sm-4">
							<p class="title_section">PRESUPUESTO (MXN)</p>
							<?php $budget_amount = $elcontrato->releases[0]->tender->value->amount;?>
							<h2 class="amount"><b class="budget"></b><span>$</span><?php echo number_format($budget_amount,2, '.', ',');?></h2>
						</div>
						<div class="col-sm-4">
							<p class="title_section">Gastado (MXN)</p>
							<?php
								if($elcontrato->releases[0]->contracts[0]->value->amount)	{
									$amount_gastado =  $elcontrato->releases[0]->contracts[0]->value->amount;
								}
								else {
									$amount_gastado =  0;
								}	
							?>
							<h2 class="amount"><b class="spent"></b><span>$</span><?php echo number_format($amount_gastado,2, '.', ',');?></h2>
						</div>
						<div class="col-sm-4">
							<?php 
								$percent_tender = ($amount_gastado * 100)/$budget_amount;
								
								if ($percent_tender > 100) {
									$percent_budget = ($budget_amount * 100)/$amount_gastado . '%' ;
									$percent_spent  = '100%';
								}
								else {
									$percent_budget = '100%';
									$percent_spent = $percent_tender .'%';
								}
								
							?>
							
							<p class="title_section">% GASTADO</p>
							<div class="percent">
								<div class="budget" style="width: <?php echo $percent_budget;?>"></div>
								<div class="spent"  style="width: <?php echo $percent_spent;?>"></div>
							</div>
							<p class="title_section"><span>0</span> <span class="right"><?php echo $percent_tender > 100 ? number_format($percent_tender) : '100';?> </span></p>
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
							<p><a href="/dependencia.php"><?php echo $elcontrato->releases[0]->tender->procuringEntity->name;?></a></p>
						</div>
						<div class="col-sm-4">
							<p class="title_section">MÉTODO DE ADQUISICIONES</p>
							<?php switch ($elcontrato->releases[0]->tender->procurementMethod){
								case "selective":
									$procurementMethod = "Selectiva";
									break;
								case "open":
									$procurementMethod = "Abierta";
									break;
								case "limited":
									$procurementMethod = "Limitada";
									break;
							}?>
							<p><?php echo $procurementMethod;?> </p>
						</div>
						<div class="col-sm-4">
							<?php switch ($elcontrato->releases[0]->tender->awardCriteria){
								case "lowestCost":
									$awardCriteria = "Costo más bajo";
									break;
								case "bestProposal":
									$awardCriteria = "Mejor Propuesta";
									break;
								case "bestValueToGovernment":
									$awardCriteria = "Mejor oferta al Gobierno";
									break;
								case "bestValueToGovernment":
									$singleBidOnly = "Oferta";
									break;
							}?>
							<p class="title_section">CRITERIOS DE ADJUDICACIÓN</p>
							<p><?php echo $awardCriteria;?></p>
						</div>
					</div>
					
					<div class="row divider">
						<div class="col-sm-8">
							<p class="title_section">ARTÍCULOS</p>
							<ul>
								<?php foreach ($elcontrato->releases[0]->tender->items as $item):?>
								<li class="row">
									<span class="col-sm-9"><?php echo $item->description;?> </span>
									<span class="col-sm-3"><?php echo $item->quantity;?> <?php echo $item->unit->name;?> </span>
								</li>
								<?php endforeach;?>		
							</ul>
						</div>
						
						<div class="col-sm-4">
							<p class="title_section">DOCUMENTOS</p>
						</div> 
					</div>
					
					<div class="row">
						<div class="col-sm-4">
							<p class="title_section">LICITADORES que aplicaron</p>
							<h2 class="amount"><?php echo $elcontrato->releases[0]->tender->numberOfTenderers;?></h2>
							<ol>
								<?php foreach ($elcontrato->releases[0]->tender->tenderers as $tenderer):?>
								<li><a href="#"><?php echo $tenderer->name;?></a> - <?php echo $tenderer->address->region;?></li>
								<?php endforeach;?>	
							</ol>
						</div>
						<div class="col-sm-4">
							<p class="title_section">Adjudicaciones</p>
							<h2 class="amount"><?php echo count($elcontrato->releases[0]->awards);?></h2>
							<ol>
								<?php foreach ($elcontrato->releases[0]->awards[0]->suppliers as $supplier):?>
								<li><a href="#"><?php echo $supplier->name;?></a></li>
								<?php endforeach;?>	
							</ol>
						</div>
						<div class="col-sm-4">
							<p class="title_section">Contratos</p>
							<h2 class="amount"><?php echo count($elcontrato->releases[0]->contracts);?></h2>
							<ol>
								<?php foreach ($elcontrato->releases[0]->contracts as $contract):?>
								<li><a href="#"><?php echo $contract->title;?></a></li>
								<?php endforeach;?>	
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